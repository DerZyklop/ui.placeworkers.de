<?php snippet('header') ?>

<div class="pl-pattern">

  <h2 class="pl-pattern-headline">
    <a href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a>
  </h2>

  <div class="pl-pattern-body">
    <div class="<?php echo $page->wrap() ?>">
      <?php snippet('pattern', array('pattern' => $page)) ?>
    </div>
  </div>

</div>

<h2 id="html" class="pl-pattern-headline">
  <a href="#html">HTML</a>
</h2>
<pre class="pl-codeview"><code><?php

$html = snippet('pattern', array('pattern' => $page), true);
$html = prettify($html);

echo htmlspecialchars(trim($html));

?></code></pre>

<?php if($css = $page->files()->find('styles.css')): ?>

<h2 id="css" class="pl-pattern-headline">
  <a href="#css">CSS</a>
</h2>
<pre class="pl-codeview"><code><?php

echo htmlspecialchars(trim(f::read($css->root())));

?></code></pre>

<?php endif ?>

<?php snippet('footer') ?>
