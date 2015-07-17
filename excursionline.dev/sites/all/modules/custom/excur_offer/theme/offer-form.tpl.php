<?php
/**
 * @file.
 */
?>
<div class="col-xs-12 excur-offer-type ">
  <div class="col-xs-12 excur-offer-title"><?php print $form['#data']['title']; ?></div>
  <div class="col-xs-6 excur-offer-info">
    <p class="excur-offer-text">
      <?php print $form['#data']['work_days_time']; ?>
    </p>
  </div>
  <div class="col-xs-6 excur-offer-info">
    <p class="excur-offer-text">
      <?php print t('Duration') . ' ' . $form['#data']['duration']; ?>
    </p>
  </div>

  <?php foreach($form['#data']['count_ticket'] as $val): ?>
    <div class="col-xs-12 excur-offer-item">
      <div class="col-xs-3 excur-offer-item-inner">
        <?php print $form['#data']['tickets'][$val]['title']?>
      </div>
      <div class="col-xs-2 col-xs-offset-3">
        <?php if($form['tickets']['#type'] != 'radios'):?>
        <span class="glyphicon glyphicon-minus icon-minus" id="ticket-minus-<?php print $val;?>" data-sum="<?php print $form['#data']['count_ticket-id']?>"> </span>
        <input type="text" id='input-ticket-<?php print $val;?>' class="form-control count-ticket-form" data-inp-id='edit-<?php print $val;?>' size="1" value="0">
        <span class="glyphicon glyphicon-plus icon-plus" id="ticket-plus-<?php print $val;?>" data-sum="<?php print $form['#data']['count_ticket-id']?>"></span>
        <?php endif;?>
      </div>
      <div class="col-xs-4 excur-offer-item-inner-big">
        <span id="ticket-price-<?php print $val; ?>">
          <?php print $form['#data']['tickets'][$val]['price']?>
        </span>
        <span class="currency">
          <?php print $form['#data']['tickets'][$val]['currency']?>
        </span>
      </div>
    </div>
  <?php endforeach; ?>

  <?php if($form['tickets']['#type'] == 'radios'):?>
    <?php print render($form['tickets']); ?>
  <?php endif;?>

  <?php if ($form['tickets']['#type'] == 'data'): ?>
    <div class="col-xs-12 excur-offer-item-sum">
      <div class="col-xs-4 col-xs-offset-5 excur-offer-item-sum-prefix">
        <?php print t('Total price');?>
      </div>
      <div class="col-xs-3 excur-offer-item-sum-inner">
        <span id="sum-price-offer-<?php print $form['#data']['count_ticket-id']?>" class="sum-price">
          0
        </span>
        <span class="currency white-curency">
          <?php print $form['#data']['currency']; ?>
        </span>
      </div>
    </div>
  <?php endif; ?>
  <div class="col-xs-8 excur-offer-date">
    <?php print render($form['date']); ?>
  </div>
  <div class="col-xs-4 excur-order-button">
    <?php print render($form['submit']); ?>
  </div>
    <?php print drupal_render_children($form); ?>
</div>