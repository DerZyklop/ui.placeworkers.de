<?php if($template = $pattern->files()->find('template.php')): ?>
<?php require($template->root()) ?>
<?php endif ?>