<?php
/**
 * @file
 * Provides overrides and additions to aid the theme.
 */
function wundertheme_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
}