<?php
/**
 * @file
 * cwrc_theme_compat.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function cwrc_theme_compat_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "borealis_sb" && $api == "borealis_sb_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
