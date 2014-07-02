<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo html($site->title() . ' / ' . $page->title()) ?></title>

  <?php if($site->typekit() != ''): ?>
  <script type="text/javascript" src="//use.typekit.net/<?php echo $site->typekit() ?>.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php endif ?>

  <?php echo css('patternlab/css/patternlab.css') ?>
  <?php echo css('styles.css') ?>
  <?php echo css(yaml($site->css())) ?>

</head>
  <body class="pl">

    <?php snippet('sidebar') ?>

    <main class="pl-main">