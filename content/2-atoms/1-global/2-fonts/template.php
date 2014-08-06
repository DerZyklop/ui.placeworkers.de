<?php foreach (yaml($pattern->fonts()) as $font): ?>
  <div style="font-family:<?php echo $font['code'] ?>;">
    <p>Font: <?php echo $font['code'] ?></p>
    <p><em>Font italic: <?php echo $font['code'] ?></em></p>
    <p><strong>Font font bold: <?php echo $font['code'] ?></strong></p>
  </div>
  <br>
<?php endforeach ?>
