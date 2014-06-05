<div class="pl-pattern">

  <h2 class="pl-pattern-headline">
    <a href="<?php echo $pattern->url() ?>"><?php echo $pattern->title() ?></a>
  </h2>

  <div class="pl-pattern-body">
    <?php snippet('pattern', array('pattern' => $pattern)) ?>
  </div>

</div>