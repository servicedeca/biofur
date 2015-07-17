<div class="col-xs-3">
  <aside class="user-profile-sidebar">
    <div class="user-profile-avatar text-center">
      <?php print $photo; ?>
    </div>
    <a href="#">
      <div class="text-change-avatar">
        Изменить фото
      </div>
      <div class="change-avatar">
      </div>
    </a>
    <ul class="list user-profile-nav">
      <?php foreach($menu as $item): ?>
        <li>
          <?php print $item ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>
</div>