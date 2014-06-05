<ul class="pl-colors">
  <?php foreach(yaml($pattern->colors()) as $color): ?><!--
--><li class="pl-color">
    <span class="pl-swatch" style="background-color: #<?php echo $color['code'] ?>"></span>
    <span class="pl-swatch-label">
      <?php echo html($color['label']) ?>
      <small>#<?php echo $color['code'] ?></small>
    </span>
  </li><!--
--><?php endforeach ?>
</ul>