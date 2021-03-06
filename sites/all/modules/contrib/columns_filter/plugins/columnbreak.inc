<?php

/**
 * @file
 * Wysiwyg API integration for Columns filter module.
 */

/**
 * Implements hook_wysiwyg_plugin().
 */
function columns_filter_columnbreak_plugin() {
  $plugins['columnbreak'] = array(
    'title' => t('Column break'),
    'vendor url' => 'http://drupal.org/project/columns_filter',
    'icon file' => 'columnbreak.gif',
    'icon title' => t('Insert a column break'),
    'settings' => array(),
  );
  return $plugins;
}

