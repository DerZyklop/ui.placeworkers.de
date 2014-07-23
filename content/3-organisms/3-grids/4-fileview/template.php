<div class="fileview">

  <figure class="fileview-image">

    <nav class="fileview-nav">
      <a data-shortcut="right" class="fileview-nav-next" href="#">
        <i class="fa fa-chevron-right fa-lg"></i>
      </a>
    </nav>

    <a class="fileview-image-link" href="#"><img src="<?php echo $pattern->image()->url() ?>"></a>

  </figure>

  <aside class="fileview-sidebar section">

    The file form goes here

    <nav class="fileview-options">
      <ul class="nav nav-bar nav-btn cf">
        <li>
          <a href="#" class="btn btn-with-icon">
            <i class="icon icon-left fa fa-arrow-circle-left"></i>
            Files
          </a>
        </li>

        <li>
          <a data-shortcut="r" href="#" class="btn btn-with-icon">
            <i class="icon icon-left fa fa-cloud-upload"></i>
            Replace
          </a>
        </li>

        <li>
          <a data-shortcut="#" href="#" class="btn btn-with-icon">
            <i class="icon icon-left fa fa-trash-o"></i>
            Delete
          </a>
        </li>
      </ul>
    </nav>

  </aside>

</div>