<?php snippet('header') ?>

<div class="pl-error">
  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>