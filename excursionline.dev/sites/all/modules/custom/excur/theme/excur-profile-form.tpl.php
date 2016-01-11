<?php if ($user->uid == 1): ?>
  <?php print drupal_render_children($form); ?>
<?php else: ?>
  <div class="col-xs-9 right-line-office">
  <h1 class="office-name"><?php print $account->field_name[LANGUAGE_NONE][0]['value']; ?></h1>
  <h2 class="office-place">Новосибирск, Россия</h2>
  <h3 class="office-title"><?php print t('My profile'); ?></h3>
  <div class="col-xs-6 profile-part">
    <h3 class="office-place"><?php print t('personal information');?></h3>
    <div class="form-group">
      <label class="label-profile">Логин</label>
      <?php print render($form['account']['name']); ?>
      <label class="label-profile">E-mail</label>
      <?php print render($form['account']['mail']); ?>
      <label class="label-profile">ФИО</label>
      <?php print render($form['field_name']); ?>
      <div class="mini-label-profile short-mini-lebel">Введите ФИО на родном языке</div>
      <label class="label-profile">Город</label>
      <?php print render($form['field_city']); ?>
      <label class="label-profile">Родной язык</label>
      <?php print render($form['field_language']); ?>
      <label class="label-profile">Языки</label>
      <?php print render($form['field_languages']); ?>
      <div class="mini-label-profile">Перечислите через запятую языки, которыми вы владеете например "Русский, Английский"</div>
      <label class="label-profile">Телефон</label>
      <?php print render($form['field_phone']); ?>
      <label class="label-profile">О себе</label>
      <?php print render($form['field_description']); ?>
    </div>
    <div class="col-xs-12">
      <?php print render($form['actions']);?>
    </div>
  </div>
  <div class="col-xs-6 profile-part">
    <h3 class="office-place">Пароль</h3>
    <div class="form-group">
      <label class="label-profile">Текущий пароль</label>
      <?php print render($form['account']['current_pass']); ?>
      <div class="mini-label-profile">Введите Ваш текущий пароль для смены E-mail адрес или Пароль.
        <a href='#'>Забыли пароль?</a>
      </div>
      <?php print render($form['account']['pass']); ?>
      <div class="mini-label-profile">
        Чтобы изменить текущий пароль, укажите новый пароль в обоих полях.
      </div>
    </div>
    <div class="col-xs-12">
      <h3 class="office-place office-place-config">Настройки</h3>
    </div>


    <?php print render($form['guide']); ?>
    <?php print render($form['guide_company']); ?>
    <?php print render($form['partner']); ?>
    <?php print render($form['privatemsg']); ?>
    <?php print render($form['field_image']); ?>


  </div>

  <div class="element-hidden">
    <?php print drupal_render_children($form); ?>
  </div>
<?php endif; ?>