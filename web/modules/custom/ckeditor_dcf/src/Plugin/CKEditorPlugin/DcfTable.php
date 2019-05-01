<?php

namespace Drupal\ckeditor_dcf\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CKEditor DCF Table" plugin.
 *
 * @CKEditorPlugin(
 *   id = "ckeditor_dcf_table",
 *   label = @Translation("DCF Table")
 * )
 */
class DcfTable extends CKEditorPluginBase implements CKEditorPluginContextualInterface {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    $module_path = drupal_get_path('module', 'ckeditor_dcf');
    return $module_path . '/js/plugin/ckeditor_dcf_table/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    $settings = $editor->getSettings();
    if (isset($settings['plugins']['ckeditor_dcf_base']['enabled_plugins']['ckeditor_dcf_table'])
      && $settings['plugins']['ckeditor_dcf_base']['enabled_plugins']['ckeditor_dcf_table'] != '0'
      ) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
