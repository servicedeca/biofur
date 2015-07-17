<div class="modal-dialog" id="modal-order-wrapper">
  <div class="modal-content bg-transparent">
    <div class="content-modal-container">
      <div class="col-xs-5 modal-pay-image">
        <?php print $image; ?>
      </div>
      <div class="col-xs-7  modal-pay-excur-info">
        <h1 class="excur-title modal-pay-title">
          <?php print $offer['title']; ?>
        </h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <?php print $close_image; ?>
        </button>
        <div class="col-xs-6  content-modal-pay-inner">
          <div class="col-xs-12 modal-pay-place-form lebel-mini-form">
            <p class="modal-pay-form-lebel"><?php print t('start time')?></p>
            <div class="modal-pay-text-mini">
              <?php print render($offer['time']); ?>
            </div>
          </div>
          <div class="col-xs-12 modal-pay-place-form lebel-mini-form">
            <p class="modal-pay-form-lebel"><?php print t('language'); ?></p>
            <div class="modal-pay-text-mini">Русский</div>
          </div>
        </div>
        <div class="col-xs-5 content-modal-pay-inner">
          <div class="col-xs-12 modal-pay-inner-item">
            <?php print $place_image; ?>
            <div class="modal-place-city" ><?php print $offer['city_name']; ?></div>
            <div class="excur-contacts-city modal-lebel"><?php print $offer['country_name']; ?></div>
          </div>
          <div class="col-xs-12 modal-pay-inner-item-mini">
            <?php print $time_image; ?>&nbsp&nbsp<?php print $offer['duration']; ?>
          </div>
          <div class="col-xs-12 modal-pay-inner-item-mini">
            <?php print $calendar_image; ?>&nbsp&nbsp <?php print $offer['date']; ?>
          </div>
        </div>
        <div class="col-xs-11 modal-pay-place-form">
          <p class="modal-pay-form-lebel-place"><?php print t('venue'); ?></p>
          <div class="modal-pay-text-place">
            <?php print $offer['venue']; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 content-modal-ticket-container">
      <?php foreach ($tickets as $ticket): ?>
        <div class="col-xs-12 modal-ticket-line">
          <div class="col-xs-6 modal-ticket-line-inner">
            <?php print $offer['offer']; ?>
          </div>
          <div class="col-xs-3 modal-ticket-line-inner">
            <?php print $ticket['title']; ?>
          </div>
          <div class="col-xs-3 modal-ticket-line-inner-price">
            <?php print $ticket['price']; ?>
            <span class="currency lebel-modal-prefix">
          <?php print $ticket['currency']; ?>
        </span>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="col-xs-12 modal-ticket-line modal-line-result">
        <div class="col-xs-3 col-xs-offset-6 modal-ticket-line-inner">
          К оплате
        </div>
        <div class="col-xs-3 modal-ticket-line-inner-price">
          <?php print $offer['price']; ?>
          <span class="currency lebel-modal-prefix">
            <?php print $offer['currency']; ?>
          </span>
        </div>
      </div>
    </div>
    <div class=" col-xs-12 content-modal-form-container">
      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container-pay">
        <h1 class="modal-form-title"><?php print t('Your contacts'); ?></h1>
        <p class="modal-form-tip">
          <?php print t('Check the data'); ?>
        </p>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('Name') . ':'; ?></span>
            <?php print $offer['name']; ?>
          </div>
        </div>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('E-mail') . ':'; ?></span>
            <?php print $offer['email']; ?>
          </div>
        </div>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('Number phone') . ':'; ?></span>
            <?php print $$offer['phone']; ?>
          </div>
        </div>
      </div>

      <?php if(!empty($offer['tourist_name'])): ?>
      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container-pay-hidden">
        <h1 class="modal-form-title margin-top-title">КОНТАКТНЫЕ ДАННЫЕ ТУРИСТА</h1>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('Name') . ':'; ?></span>
            <?php if(!empty($offer['tourist_name'])): ?>
              <?php print $offer['tourist_name']; ?>
            <?php endif;?>
          </div>
        </div>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('E-mail') . ':'; ?></span>
            <?php if(!empty($offer['tourist_email'])): ?>
            <?php print $offer['tourist_email']; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xs-12 modal-form-item">
          <div class="modal-form-item-content">
            <span class="modal-form-item-content-prefix"><?php print t('Number phone') . ':'; ?></span>
            <?php if(!empty($offer['tourist_phone'])): ?>
              <?php print $$offer['tourist_phone']; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container-button">

        <div class="col-xs-4">
          <a id="pay-back" class="button-pay back">
            <?php print t('back'); ?>
          </a>
        </div>

        <div class="col-xs-4 col-xs-offset-2">
          <a  class="button-pay last-pay" id="offer-pay-end" data-offer-id="<?php print $off_id; ?>">
            <?php print t('pay'); ?>
          </a>
        </div>

      </div>
    </div>

    <div class="col-xs-12 modal-free-space">
    </div>
  </div>
</div>
