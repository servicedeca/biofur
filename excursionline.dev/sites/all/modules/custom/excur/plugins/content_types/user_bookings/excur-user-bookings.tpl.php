<div class="col-xs-9 right-line-office">
  <h1 class="office-name"><?php print $user_name; ?></h1>
  <?php if(isset($city_country)) : ?>
    <h2 class="office-place"><?php print $city_country; ?></h2>
  <?php endif; ?>
  <h3 class="office-title"><?php print t('my Reservations'); ?></h3>

  <div class="col-xs-12 offer-line-select">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#"><?php print t('Confirmed'); ?></a></li>
      <li role="presentation"><a href="#"><?php print t('Not confirmed');?></a></li>
      <li role="presentation"><a href="#"><?php print t('Rejected');?></a></li>
      <li role="presentation"><a href="#"><?php print t('Archive');?></a></li>
    </ul>
  </div>
  <div class="col-xs-12 excur-list-content booking-list">
    <?php print render($confirmed); ?>
  </div>
