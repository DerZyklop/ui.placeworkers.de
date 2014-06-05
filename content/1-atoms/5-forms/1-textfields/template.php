<form action="#">
  <fieldset class="fields">
    <div class="field">
      <label class="label" for="text">Text Input <abbr title="Required">*</abbr></label>
      <input class="input" id="text" type="text" placeholder="Text Input">
    </div>
    <div class="field">
      <label class="label" for="password">Password</label>
      <input class="input" id="password" type="password" placeholder="Type your Password">
    </div>
    <div class="field">
      <label class="label" for="url">URL</label>
      <input class="input" id="url" type="url" placeholder="http://yoursite.com">
    </div>
    <div class="field">
      <label class="label" for="email">Email Address</label>
      <input class="input" id="email" type="email" placeholder="name@email.com">
    </div>
    <div class="field">
      <label class="label" for="text">Phone Number <abbr title="Required">*</abbr></label>
      <input class="input" id="text" type="tel" placeholder="Enter a Phone number" required>
    </div>
    <div class="field">
      <label class="label" for="text">Number Input <abbr title="Required">*</abbr></label>
      <input class="input" id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*" required>
    </div>
    <div class="field">
      <label class="label" for="textarea">Textarea</label>
      <textarea class="input" id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
    </div>
    <div class="field field-with-error">
      <label class="label">Error Input</label>
      <input class="input" type="text" placeholder="Text Input">
    </div>
    <div class="field">
      <label class="label">Read-only</label>
      <input class="input input-is-readonly" readonly type="text" placeholder="Text Input">
    </div>
  </fieldset>
</form>