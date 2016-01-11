<?php

/**
 * @file.
 */

/**
 * Preprocess for excur-profile-form.tpl.php.
 */
function excur_preprocess_excur_profile_form(&$vars) {
  $vars['account'] = user_load($vars['user']->uid);
  if($vars['account']->uid != 1) {
    unset($vars['form']['account']['name']['#title']);
    unset($vars['form']['account']['name']['#description']);
    $vars['form']['account']['name']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['account']['mail']['#title']);
    unset($vars['form']['account']['mail']['#description']);
    $vars['form']['account']['mail']['#attributes']['class'] = array('form-control', 'form-profile');


    unset($vars['form']['field_name'][LANGUAGE_NONE][0]['value']['#title']);
    unset($vars['form']['field_name'][LANGUAGE_NONE][0]['value']['#description']);
    $vars['form']['field_name'][LANGUAGE_NONE][0]['value']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['field_city'][LANGUAGE_NONE][0]['target_id']['#title']);
    $vars['form']['field_city'][LANGUAGE_NONE][0]['target_id']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['field_language']['und']['#title']);
    $vars['form']['field_language']['und']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['field_languages'][LANGUAGE_NONE]['#title']);
    unset($vars['form']['field_languages'][LANGUAGE_NONE]['#description']);
    $vars['form']['field_languages'][LANGUAGE_NONE]['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['field_phone'][LANGUAGE_NONE][0]['value']['#title']);
    $vars['form']['field_phone']['und'][0]['value']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['field_description'][LANGUAGE_NONE][0]['value']['#title']);
    $vars['form']['field_description'][LANGUAGE_NONE][0]['value']['#attributes']['class'] = array('form-control', 'form-profile');
    $vars['form']['field_description'][LANGUAGE_NONE][0]['value']['#rows'] = 4;
    unset($vars['form']['field_description']['und'][0]['format']);

    unset(  $vars['form']['account']['pass']['pass1']['#title']);
    unset(  $vars['form']['account']['pass']['pass2']['#title']);
    $vars['form']['account']['pass']['pass1']['#attributes']['class'] = array('form-control', 'form-profile');
    $vars['form']['account']['pass']['pass2']['#attributes']['class'] = array('form-control', 'form-profile');

    unset($vars['form']['account']['current_pass']['#title']);
    unset($vars['form']['account']['current_pass']['#description']);
    unset($vars['form']['account']['pass']['#description']);
    $vars['form']['account']['current_pass']['#attributes']['class'] = array('form-control', 'form-profile');
  }
}

/**
 * Preprocess for excur-travel-planner.tpl.php.
 */
function excur_preprocess_excur_travel_planner(&$vars) {
  $account = user_load($vars['user']->uid);
  drupal_add_library('system', 'ui.draggable');

  $flags = flag_get_user_flags('node', NULL, $account->uid);
  $flags = reset($flags);
  foreach ($flags as $flag) {
    $service = entity_load($flag->entity_type, array($flag->entity_id));
    $service = reset($service);
    $vars['services'][] = check_plain($service->title);
  }

  $vars['user_menu'] = excur_user_menu($account);
}

/**
 * Preprocess for excur-language-switcher.tpl.php.
 */
function excur_preprocess_excur_language_switcher(&$vars) {
  global $language;

  $vars['def_language'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/' . $language->prefix . '.png',
    'alt' => $language->native,
    'title' => $language->native,
    'attributes' => array(
      'class' => array('currency-img'),
    ),
  ));

  foreach (language_list() as $lang) {
    if ($lang->enabled && $lang->language == 'ru') {
      $url = url(current_path(), array('language' => $lang, 'absolute' => TRUE));

      $vars['languages'][$lang->prefix]['class'] = $lang->prefix == $language->prefix
        ? 'active'
        : '';
      $vars['languages'][$lang->prefix]['url'] = $url;
      $vars['languages'][$lang->prefix]['native'] = $lang->native;
      $vars['languages'][$lang->prefix]['icon'] = theme('image', array(
        'path' => EXCUR_FRONT_THEME_PATH . '/images/' . $lang->prefix . '.png',
        'alt' => $lang->native,
        'title' => $lang->native,
        'attributes' => array(
        ),
      ));
    }
  }

}

/**
 * Preprocess for excur-user-login-form.tpl.php.
 */
function excur_preprocess_excur_user_login_form(&$vars) {
  $form = &$vars['form'];
  $classes = array('form-control', 'modal-registration-form');

  $form['name']['#attributes']['class'] = $classes;
  $form['name']['#attributes']['placeholder'] = t('Email');
  $form['name']['#title_display'] = 'invisible';
  $form['name']['#description'] = '';

  $form['pass']['#attributes']['class'] = $classes;
  $form['pass']['#attributes']['placeholder'] = t('Password');
  $form['pass']['#title_display'] = 'invisible';
  $form['pass']['#description'] = '';

  $attributes = array(
    'class' => array('input-icon'),
  );

  $vars['icon_email'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/icon/ph-mail.png',
    'alt' => t('Email'),
    'title' => t('Email'),
    'attributes' => $attributes,
  ));
  $vars['icon_password'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/icon/ph-pass.png',
    'alt' => t('Password'),
    'title' => t('Password'),
    'attributes' => $attributes,
  ));
}


/**
 * Preprocess for excur-user-register-form.tpl.php.
 */
function excur_preprocess_excur_user_register_form(&$vars) {
  $form = &$vars['form'];
  $classes = array('form-control', 'modal-registration-form');

  $form['account']['mail']['#attributes']['class'] = $classes;
  $form['account']['mail']['#attributes']['placeholder'] = t('Email');
  $form['account']['mail']['#title_display'] = 'invisible';
  $form['account']['mail']['#description'] = '';

  $form['account']['pass']['pass1']['#attributes']['class'] = $classes;
  $form['account']['pass']['pass1']['#attributes']['placeholder'] = t('Password');
  $form['account']['pass']['pass1']['#title_display'] = 'invisible';
  $form['account']['pass']['pass1']['#description'] = '';

  $form['account']['pass']['pass2']['#attributes']['class'] = $classes;
  $form['account']['pass']['pass2']['#attributes']['placeholder'] = t('Confirm password');
  $form['account']['pass']['pass2']['#title_display'] = 'invisible';
  $form['account']['pass']['pass2']['#description'] = '';

  $form['field_name'][LANGUAGE_NONE][0]['value']['#title_display'] = 'invisible';
  $form['field_name'][LANGUAGE_NONE][0]['value']['#description'] = '';
  $form['field_name'][LANGUAGE_NONE][0]['value']['#attributes']['class'] = array_merge($form['field_name'][LANGUAGE_NONE][0]['value']['#attributes']['class'], $classes);
  $form['field_name'][LANGUAGE_NONE][0]['value']['#attributes']['placeholder'] = t('Name');

  $form['field_language'][LANGUAGE_NONE]['#title_display'] = 'invisible';
  $form['field_language'][LANGUAGE_NONE]['#description'] = '';
  $form['field_language'][LANGUAGE_NONE]['#attributes']['class'] = $classes;
  $form['field_language'][LANGUAGE_NONE]['#attributes']['placeholder'] = t('Native language');

  $form['field_agreement'][LANGUAGE_NONE]['#required'] = FALSE;

  $attributes = array(
    'class' => array('input-icon'),
  );
  $vars['icon_email'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/icon/ph-mail.png',
    'alt' => t('Email'),
    'title' => t('Email'),
    'attributes' => $attributes,
  ));
  $vars['icon_password'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/icon/ph-pass.png',
    'alt' => t('Password'),
    'title' => t('Password'),
    'attributes' => $attributes,
  ));
  $vars['icon_name'] = theme('image', array(
    'path' => EXCUR_FRONT_THEME_PATH . '/images/icon/ph-name.png',
    'alt' => t('Name'),
    'title' => t('Name'),
    'attributes' => $attributes,
  ));
}
