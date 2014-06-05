<?php

define('DS', DIRECTORY_SEPARATOR);

// load the cms bootstrapper
include(__DIR__ . DS . 'patternlab' . DS . 'kirby' . DS . 'bootstrap.php');

// start the cms
echo kirby::start(array(
  'root.content' => __DIR__ . DS . 'content',
  'root.site'    => __DIR__ . DS . 'patternlab' . DS . 'site'
));