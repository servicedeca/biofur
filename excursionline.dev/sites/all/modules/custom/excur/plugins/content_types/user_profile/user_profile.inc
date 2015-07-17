<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function excur_user_profile_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('User profile'),
    'all contexts' => TRUE,
    'category' => t('Excur'),
  );
}

/**
 * Implements hook_content_type_render().
 */
function excur_user_profile_content_type_render($subtype, $conf, $panel_args, $context) {
  global $user;
  $account = user_load($user->uid);

  module_load_include('pages.inc', 'user');
  $block = new stdClass();
  $form = drupal_get_form('user_profile_form', $account);
  $block->content = render($form);

  return $block;
}
