<?php

/**
 * @file
 * Theme settings for Stay Smart 2017 theme.
 */

/**
 * Implements hook_system_theme_settings_alter().
 */
function stay_smart_2017_form_system_theme_settings_alter(&$form, $form_state) {
  $form['stay_smart_2017_options'] = array(
    '#type' => 'fieldset',
    '#title' => t('Stay Smart 2017 Kit settings'),
    '#weight' => 5,
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['stay_smart_2017_options']['stay_smart_2017_header_logo_alt'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Header logo alternative text'),
    '#default_value' => theme_get_setting('stay_smart_2017_header_logo_alt'),
    '#description'   => t("Alternative text to assign to the logo in the top header."),
  );

  $form['stay_smart_2017_options']['stay_smart_2017_mobile_logo'] = array(
    '#type' => 'media',
    '#title' => t('Mobile logo'),
    '#default_value' => theme_get_setting('stay_smart_2017_mobile_logo'),
    '#description' => t("Logo specifically for mobile devices."),
  );

  $form['stay_smart_2017_options']['stay_smart_2017_mobile_logo_alt'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Mobile logo alternative text'),
    '#default_value' => theme_get_setting('stay_smart_2017_mobile_logo_alt'),
    '#description'   => t("Alternative text to assign to the mobile logo in the top header."),
  );

  $form['stay_smart_2017_options']['stay_smart_2017_agency_legal_name'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Agency legal name'),
    '#default_value' => theme_get_setting('stay_smart_2017_agency_legal_name'),
    '#description'   => t("Agency legal name to display above copyright message."),
  );

  $form['stay_smart_2017_options']['stay_smart_2017_footer_copyright'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Footer copyright'),
    '#default_value' => theme_get_setting('stay_smart_2017_footer_copyright'),
    '#description'   => t("Text to display beside the sub menu links. Defaults to <em>&copy; [current year]. [Site Name]. All rights reserved.</em>"),
  );

}
