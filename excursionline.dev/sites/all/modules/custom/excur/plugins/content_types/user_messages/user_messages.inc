<?php
/**
 * @file
 * Ctools content type new_message.
 */

/**
 * Implements hook_ctools_content_types().
 */
function excur_user_messages_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('User messages'),
    'all contexts' => TRUE,
    'category' => t('Excur'),
    'hook theme' => 'excur_user_messages_content_type_theme',
  );
}

/**
 * Implements hook_content_type_render().
 */
function excur_user_messages_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $block->content = theme('excur_user_messages');

  return $block;
}

/**
 * Implements hook_content_type_theme().
 */
function excur_user_messages_content_type_theme(&$theme, $plugin) {
  $a = 1;
  $theme['excur_user_messages'] = array(
    'path' => $plugin['path'],
    'template' => 'excur-user-messages',
  );
}

/**
 * Process variables for excur-user-messages.tpl.php.
 */
function template_preprocess_excur_user_messages(&$vars) {
  global $user;

  $account = user_load($user->uid);

  $vars['messages'] = privatemsg_list_page('list', $account->uid);

}
