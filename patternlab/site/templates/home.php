<?php snippet('header') ?>

<div class="pl-content">

  <h2 class="pl-pattern-headline">
    <a href="#"><?php echo html($page->headline()) ?></a>
  </h2>

  <?php echo kirbytext($page->text()) ?>

  <h2 id="downloads" class="pl-pattern-headline">
    <a href="#downloads">Downloads</a>
  </h2>

  <ul>
    <li><a href="<?php echo url('styles.css') ?>">styles.css</a></li>
    <li><a href="<?php echo url('styles.min.css') ?>">styles.min.css</a></li>
  </ul>

  <h2 id="repository" class="pl-pattern-headline">
    <a href="#repository">Repository</a>
  </h2>

  <p><a href="<?php echo $page->repository() ?>"><?php echo $page->repository() ?></a></p>

</div>

<?php snippet('footer') ?>