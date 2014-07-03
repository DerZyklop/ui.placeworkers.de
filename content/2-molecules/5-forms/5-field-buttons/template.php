<div class="field field-with-buttons">
  <label class="label">Textarea</label>
  <div class="field-content">
    <textarea class="input"><?php echo loremipsum(500) ?></textarea>
    <nav class="field-buttons">
      <ul class="nav nav-bar">
        <li>
          <button type="button" tabindex="-1" data-input-shortcut="meta+b" data-tpl="**{text}**" data-text="bold text" class="btn">
            <i class="icon fa fa-bold"></i>
          </button>
        </li>
        <li>
          <button type="button" tabindex="-1" data-input-shortcut="meta+i" data-tpl="*{text}*" data-text="italic text" class="btn">
            <i class="icon fa fa-italic"></i>
          </button>
        </li>
        <li>
          <button type="button" tabindex="-1" data-action="link" data-tpl="(link: text: {text})" data-text="link text" class="btn">
            <i class="icon fa fa-chain"></i>
          </button>
        </li>
        <li>
          <button type="button" tabindex="-1" data-action="email" data-tpl="(email: text: {text})" data-text="email text" class="btn">
            <i class="icon fa fa-envelope"></i>
          </button>
        </li>
        <li>
          <button type="button" tabindex="-1" data-action="image" data-tpl="(image: )" data-text="" class="btn">
            <i class="icon fa fa-image"></i>
          </button>
        </li>
        <li>
          <button type="button" tabindex="-1" data-action="file" data-tpl="(file: text: {text})" data-text="file text" class="btn">
            <i class="icon fa fa-file"></i>
          </button>
        </li>
      </ul>
    </nav>
  </div>
</div>