<?php

function pattern($path) {

  $page = page($path);

  if(!$page) return '';

  echo snippet('pattern', array('pattern' => $page), true);

}