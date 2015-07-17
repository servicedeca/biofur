<div class="modal-dialog" id="modal-order-wrapper">
  <div class="modal-content bg-transparent">
    <div class="content-modal-container">
      <div class="col-xs-5 modal-pay-image">
        <?php print $image; ?>
      </div>
      <div class="col-xs-7  modal-pay-excur-info">
        <h1 class="excur-title modal-pay-title">Мистическая Венеция: легенды и призраки района Дорсодуро Дорсодуро Дорсодуро Дорсодуро Дорсодуро Дорсодуро</h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <?php print $close_image; ?>
        </button>
        <div class="col-xs-6  content-modal-pay-inner">
          <div class="col-xs-12 modal-pay-place-form lebel-mini-form">
            <p class="modal-pay-form-lebel"><?php print t('start time')?></p>
            <div class="modal-pay-text-mini">
              <?php print render($form['time']); ?>
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
          <p class="modal-pay-form-lebel-place">Место встретчи</p>
          <?php print render($form['venue']); ?>
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
      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container">
        <h1 class="modal-form-title">ВАШИ КОНТАКТНЫЕ ДАННЫЕ</h1>
        <p class="modal-form-tip">Внесите ваши контактные данные, что бы гид мог связаться с вами во время путешествия.
        </p>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['name']);?>
        </div>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['email']);?>
        </div>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['phone']);?>
        </div>
        <h3 class="col-xs-12 modal-form-title-mini">
          <input type="checkbox" id="check" onchange = 'showOrHide("check", "cat");'/>
          Я делаю бронирование для другого человека
        </h3>
      </div>

      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container-hidden" id="cat">
        <h1 class="modal-form-title margin-top-title">КОНТАКТНЫЕ ДАННЫЕ ТУРИСТА</h1>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['tourist_name']);?>
        </div>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['tourist_email']);?>
        </div>
        <div class="col-xs-12 modal-form-item">
          <?php print render($form['tourist_phone']);?>
        </div>
      </div>
      <div class="col-xs-6 col-xs-offset-3 modal-pay-form-container-button">
        <p class="modal-form-tip">Проверьте, указан ли на билете язык, время и место встречи.
        </p>
        <div class="col-xs-4 col-xs-offset-2">
          <?php print render($form['submit']); ?>
        </div>
      </div>
    </div>

    <div class="col-xs-12 modal-free-space">
    </div>
  </div>
</div>

<div class="element-hidden">
  <?php print drupal_render_children($form); ?>
</div>
