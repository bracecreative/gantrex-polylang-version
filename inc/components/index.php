<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

require_once(dirname(__FILE__) . '/Singleton.php');
require_once(dirname(__FILE__) . '/ComponentController.php');
require_once(dirname(__FILE__) . '/location-selector/LocationSelectorController.php');
require_once(dirname(__FILE__) . '/find-us-card/FindUsCardController.php');
require_once(dirname(__FILE__) . '/document-picker/DocumentPickerController.php');
require_once(dirname(__FILE__) . '/ShortcodeManager.php');

\Brace\LocationSelectorController::getInstance()->init();
\Brace\FindUsCardController::getInstance()->init();
\Brace\DocumentPickerController::getInstance()->init();

$shortcodeManager = \Brace\ShortcodeManager::getInstance()->init();

$shortcodeManager->register('find-us-card', array(
    'callback' => array(\Brace\FindUsCardController::getInstance(), 'render'),
));

// $shortcodeManager->register('brochures', array(
//     'callback' => array(\Brace\DocumentListController::getInstance(), 'render'),
//     'args'     => array(
//         'type' => 'brochures'
//     )
// ));