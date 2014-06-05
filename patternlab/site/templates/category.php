<?php snippet('header') ?>

<?php foreach($page->children()->children() as $pattern): ?>
<?php snippet('listitem', array('pattern' => $pattern)) ?>
<?php endforeach ?>

<?php snippet('footer') ?>