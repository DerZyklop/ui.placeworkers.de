<?php

function compress($buffer) {
  /* remove comments */
  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
  /* remove tabs, spaces, newlines, etc. */
  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
  return $buffer;
}

function styles() {

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

  return $css;

}

c::set('routes', array(
  array(
    'pattern' => 'styles.css',
    'action'  => function() {
      header::type('css');
      die(trim(styles()));
    }
  ),
  array(
    'pattern' => 'styles.min.css',
    'action'  => function() {
      header::type('css');
      die(trim(compress(styles())));
    }
  )
));