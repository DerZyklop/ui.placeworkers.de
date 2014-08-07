<div class="subnav-wrap">
  <ul class="subnav">
    <?php foreach( $p->children()->visible() as $p_sub ): ?>
      <li>
        <a href="<?php echo( $p_sub->url() ); ?>"><?php echo( $p_sub->title() ); ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
