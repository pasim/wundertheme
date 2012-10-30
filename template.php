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
 *
 * Gets rid of some Panels CSS.
 */
function wundertheme_css_alter(&$css) {
  foreach ($css as $path => $meta) {
    if (strpos($path, 'threecol_33_34_33_stacked') !== FALSE || strpos($path, 'threecol_25_50_25_stacked') !== FALSE) {
      unset($css[$path]);
    }
  }
}
