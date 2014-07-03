<aside class="pl-sidebar">

  <ul class="pl-menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="pl-menu-item<?php e($item->isActive(), ' pl-menu-item-active') ?>">
      <a class="pl-menu-link" href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>

      <?php if($item->hasVisibleChildren() and $item->isOpen()): ?>
      <ul class="pl-submenu">
        <?php foreach($item->children()->visible() as $subitem): ?>
        <li class="pl-submenu-item<?php e($subitem->isOpen(), ' pl-submenu-item-active') ?>">
          <a class="pl-submenu-link" href="<?php echo $subitem->url() ?>"><?php echo $subitem->title() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>

  </ul>

</aside>