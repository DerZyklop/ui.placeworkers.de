<?php

c::set('routes', array(
  array(
    'pattern' => 'styles.css',
    'action'  => function() {

      $css = '';

      foreach(site()->pages()->visible() as $item) {

        foreach($item->children() as $subitem) {

          if($file = $subitem->file('styles.css')) {
            $css .= PHP_EOL . $file->read();
          }

          foreach($subitem->children() as $subsubitem) {

            if($file = $subsubitem->files()->find('styles.css')) {
              $css .= PHP_EOL . $file->read();
            }

          }

        }

      }

      header::type('css');
      die(trim($css));

    }

  )
));