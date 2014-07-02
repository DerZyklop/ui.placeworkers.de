<div class="pl-pattern">

  <h2 class="pl-pattern-headline">
    <a href="<?php echo $pattern->url() ?>"><?php echo $pattern->title() ?></a>
  </h2>

  <div class="pl-pattern-body">
    <div class="<?php echo $pattern->wrap() ?>">
      <?php snippet('pattern', array('pattern' => $pattern)) ?>
    </div>
  </div>

</div>