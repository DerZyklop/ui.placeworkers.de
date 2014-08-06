module.exports = (grunt) ->

  # Get all grunt modules
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks)
  require('time-grunt')(grunt)

  # Project configuration.
  grunt.initConfig

    # Collect data about the project
    pkg: grunt.file.readJSON('package.json')

    # Set Banner for some generated files
    banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */\n'

    # coffee
    coffee:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.coffee %>'
          src: ['*.coffee']
          dest: '<%= pkg.paths.src.js %>'
          ext: '.js'
        ]

    # concat
    concat:
      options:
        banner: '<%= banner %>'
      script:
        src: [
          '<%= pkg.paths.src.js %>*.js'
        ]
        dest: '<%= pkg.paths.build.js %>script.js'
      css:
        src: [
          '<%= pkg.paths.src.css %>**/*.css'
        ]
        dest: '<%= pkg.paths.build.css %>styles.css'
      sass:
        src: [
          '<%= pkg.paths.src.sass %>**/*.sass'
        ]
        dest: '<%= pkg.paths.src.dir %>/sass/styles.sass'

    # eslint
    eslint:
      options:
        config: '<%= pkg.esLintRules %>'
      all: ['<%= pkg.paths.src.js %>*.js']

    # sass
    sass:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.dir %>/sass/'
          src: ['**/*.sass','**/!_*.sass']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # autoprefixer
    autoprefixer:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['**/*.css']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # imageEmbed
    # REMEMBER! Fonts should be ignored
    # by trailing a `/*ImageEmbed:skip*/`
    # after `src: url(...)`
    imageEmbed:
      options:
        deleteAfterEncoding : false
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['*.css']
          dest: '<%= pkg.paths.src.css %>'
        ]

    # cssmin
    cssmin:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['**/*.css']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # watch
    watch:
      # watch coffee
      coffee:
        files: ['<%= pkg.paths.src.coffee %>*.coffee']
        tasks: ['newer:coffee', 'newer:eslint', 'concat:script']
        options:
          livereload: true
      # watch sass
      sass:
        files: ['<%= pkg.paths.src.sass %>**/*.sass']
        tasks: ['concat:sass', 'newer:sass', 'newer:autoprefixer', 'newer:imageEmbed', 'newer:cssmin', 'concat:css']
        options:
          livereload: true

      # watch copy
      copy:
        files: [
          '<%= pkg.paths.src.dir %>*'
          '<%= pkg.paths.src.dir %>site/**/*'
          '<%= pkg.paths.src.dir %>images/**/*'
        ]
        tasks: ['newer:copy']
        options:
          livereload: true

      # watch content
      content:
        files: [
          '<%= pkg.paths.src.dir %>content/**/*'
        ]
        tasks: ['newer:copy']
        options:
          livereload: true

    # copy
    copy:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.dir %>'
          src: ['**/*','!<%= pkg.paths.src.dir %>**','<%= pkg.paths.src.dir %>images/**/*']
          dest: '<%= pkg.paths.build.dir %>'
        ]

    # php
    php:
      all:
        options:
          port: 1337
          hostname: 'localhost'
          base: '<%= pkg.paths.root %>'
          keepalive: true
          open: true

    # concurrent
    concurrent:
      all:
        tasks: ['php','watch','notify']
      options:
        logConcurrentOutput: true

    # notify
    notify:
      server:
        options:
          title: 'Yo'
          message: 'Server läuft auf <%= php.all.options.hostname %>:<%= php.all.options.port %>'


  # Default task(s)
  grunt.registerTask('scripts', ['coffee', 'eslint', 'concat:script'])
  grunt.registerTask('styles', ['sass', 'autoprefixer', 'imageEmbed', 'cssmin'])
  grunt.registerTask('styles', ['concat:sass', 'sass', 'autoprefixer', 'concat:css'])
  grunt.registerTask('default', ['scripts', 'styles', 'concurrent'])
