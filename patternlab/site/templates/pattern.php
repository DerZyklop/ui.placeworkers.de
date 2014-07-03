<?php snippet('header') ?>

<?php if(param('format') == 'iframe'): ?>

  <?php snippet('listitem', array('pattern' => $page)) ?>

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

<?php else: ?>
<iframe class="pl-iframe" src="<?php echo $page->url() ?>/format:iframe"></iframe>
<?php endif ?>

<?php snippet('footer') ?>
