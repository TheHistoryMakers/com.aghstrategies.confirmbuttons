<?php

require_once 'confirmbuttons.civix.php';
// phpcs:disable
use CRM_Confirmbuttons_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_buildForm().
 *
 * Set a default value for an event price set field.
 *
 * @param string $formName
 * @param CRM_Core_Form $form
 */
function confirmbuttons_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main') {
    Civi::resources()->addStyleFile('com.aghstrategies.confirmbuttons', 'css/contributionStyles.css');
    if ($form->getVar('_id') == 6 || $form->getVar('_id') == 7) {
      Civi::resources()->addScriptFile('com.aghstrategies.confirmbuttons', 'js/reviewbuttons.js');
    }
  }
  if ($formName == 'CRM_Contribute_Form_Contribution_Confirm' && ($form->getVar('_id') == 6 || $form->getVar('_id') == 7)) {
    Civi::resources()->addScriptFile('com.aghstrategies.confirmbuttons', 'js/confirmbuttons.js');
    Civi::resources()->addStyleFile('com.aghstrategies.confirmbuttons', 'css/confirmProfile.css');
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function confirmbuttons_civicrm_config(&$config) {
  _confirmbuttons_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function confirmbuttons_civicrm_xmlMenu(&$files) {
  _confirmbuttons_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function confirmbuttons_civicrm_install() {
  _confirmbuttons_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function confirmbuttons_civicrm_postInstall() {
  _confirmbuttons_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function confirmbuttons_civicrm_uninstall() {
  _confirmbuttons_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function confirmbuttons_civicrm_enable() {
  _confirmbuttons_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function confirmbuttons_civicrm_disable() {
  _confirmbuttons_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function confirmbuttons_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _confirmbuttons_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function confirmbuttons_civicrm_managed(&$entities) {
  _confirmbuttons_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function confirmbuttons_civicrm_caseTypes(&$caseTypes) {
  _confirmbuttons_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function confirmbuttons_civicrm_angularModules(&$angularModules) {
  _confirmbuttons_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function confirmbuttons_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _confirmbuttons_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function confirmbuttons_civicrm_entityTypes(&$entityTypes) {
  _confirmbuttons_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function confirmbuttons_civicrm_themes(&$themes) {
  _confirmbuttons_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function confirmbuttons_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function confirmbuttons_civicrm_navigationMenu(&$menu) {
//  _confirmbuttons_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _confirmbuttons_civix_navigationMenu($menu);
//}
