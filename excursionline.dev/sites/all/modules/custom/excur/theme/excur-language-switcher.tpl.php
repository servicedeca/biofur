<button data-label-placement data-toggle="dropdown" class="btn btn-default dropdown-toggle mybutt padd">
<i class="data-label">
  <?php print $def_language; ?>
</i>
</button>
<ul class="dropdown-menu drop-lang" id="language-switcher">
  <?php foreach ($languages as $lang): ?>
    <li>
      <label data-url="<?php print $lang['url']; ?>" class="<?php print $lang['class']; ?>">
        <i class="data-label">
          <?php print $lang['icon']; ?>
        </i>
        <?php print $lang['native']; ?>
      </label>
    </li>
  <?php endforeach; ?>
</ul>
