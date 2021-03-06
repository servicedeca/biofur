<?php


/**
 * Implements hook_ctools_content_types().
 */
function excur_companions_service_ctools_content_types() {
  return array(
    'single' => TRUE,
    'title' => t('seeking a companion service'),
    'all contexts' => TRUE,
    'category' => t('Excur'),
  );
}

/**
 * Implements hook_content_type_render().
 */
function excur_companions_service_content_type_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $nid = menu_get_object()->nid;

  if (excur_companion_in_service($nid)) {
    $block->content = '<h1>' . t('Looking for travel companions') . '</h1>';
    $block->content .= '<div class="row">' . views_embed_view('user', 'companion_service') . '</div>';
  }
  return $block;
}
