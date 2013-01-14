<?php
/**
 * @file
 * Provides overrides and additions to aid the theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Adds a placeholder to the search block.
 */
function wundertheme_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
}

/**
 * Implements hook_css_alter().
 */
function wundertheme_css_alter(&$css) {

  /* Remove some default Drupal css */
  unset($css['modules/system/system.menus.css']);

  /* Get rid of some default panel css */
  foreach ($css as $path => $meta) {
    if (strpos($path, 'threecol_33_34_33_stacked') !== FALSE || strpos($path, 'threecol_25_50_25_stacked') !== FALSE) {
      unset($css[$path]);
    }
  }
}

/**
 * Override or insert variables into the html template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered. This is usually "html", but can
 *   also be "maintenance_page" since zen_preprocess_maintenance_page() calls
 *   this function to have consistent variables.
 */
function wundertheme_preprocess_html(&$variables, $hook) {

  $theme_path = drupal_get_path('theme', 'wundertheme');

  drupal_add_css( $theme_path . '/stylesheets/ie.css',
    array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'lt IE 9',
        '!IE' => FALSE,
      ),
      'weight' => 999,
      'every_page' => TRUE,
    )
  );
  drupal_add_css( $theme_path . '/stylesheets/style.css',
    array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'gt IE 8',
        '!IE' => TRUE,
      ),
      'weight' => 999,
      'every_page' => TRUE,
    )
  );
}