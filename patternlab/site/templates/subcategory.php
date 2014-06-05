<?php snippet('header') ?>

<?php foreach($page->children() as $pattern): ?>
<?php snippet('listitem', array('pattern' => $pattern)) ?>
<?php endforeach ?>

<?php snippet('footer') ?>