<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function excur_user_bookings_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('user bookings'),
    'all contexts' => TRUE,
    'category' => t('Excur'),
    'hook theme' => 'excur_user_bookings_content_type_theme',
  );
}

/**
 * Implements hook_content_type_render().
 */
function excur_user_bookings_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = theme('excur_user_bookings');

  return $block;
}

/**
 * Implements hook_content_type_theme().
 */
function excur_user_bookings_content_type_theme(&$theme, $plugin) {
  $theme['excur_user_bookings'] = array(
    'path' => $plugin['path'],
    'template' => 'excur-user-bookings',
  );
}

/**
 * Process variables for excur-user-bookings.tpl.php.
 */
function template_preprocess_excur_user_bookings(&$vars) {
  global $user;

  $account = user_load($user->uid);
  if(!empty($account->field_city)) {
    $city = taxonomy_term_load($account->field_city[LANGUAGE_NONE][0]['target_id']);
    $country = taxonomy_term_load($city->field_country[LANGUAGE_NONE][0]['target_id']);
    $vars['city_country'] = $city->name . ', ' . $country->name;
  }

  $vars['user_name'] = $account->field_name[LANGUAGE_NONE][0]['value'];
  $vars['confirmed'] = views_embed_view('offers', 'confirmed_user_offers');
  $vars['archive'] = views_embed_view('offers', 'archive_user_offers');
  $vars['rejected'] = views_embed_view('offers', 'rejected_user_offers');
  $vars['not_confirmed'] = views_embed_view('offers', 'user_offers');
}
