<?php snippet('header') ?>
<?php snippet('pattern', array('pattern' => $page)) ?>

<pre class="pl-codeview"><code><?php

$html = snippet('pattern', array('pattern' => $page), true);
$html = prettify($html);

echo htmlspecialchars(trim($html));

?></code></pre>

<?php snippet('footer') ?>
