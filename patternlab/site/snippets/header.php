<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo html($site->title() . ' / ' . $page->title()) ?></title>

  <?php echo css('patternlab/css/patternlab.css') ?>
  <?php echo css(yaml($site->css())) ?>

</head>
  <body class="pl">

    <?php snippet('topbar') ?>

    <main class="pl-main">