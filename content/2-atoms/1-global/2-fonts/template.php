<?php foreach (yaml($pattern->fonts()) as $font): ?>
  <div class="primary-font" style="font-family:<?php echo $font['code'] ?>;">
    <p>Primary font: <?php echo $font['code'] ?></p>
    <p><em>Primary font italic: <?php echo $font['code'] ?></em></p>
    <p><strong>Primary font bold: <?php echo $font['code'] ?></strong></p>
  </div>
  <br>
<?php endforeach ?>
