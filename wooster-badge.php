<?php

/**
 * Plugin Name: Partenariat Wooster
 * Plugin URI: https://wooster.fr/
 * Description: Intègre le badge de partenariat de Wooster.
 * Version: 0.1
 * Author: Wooster
 * Author URI: https://wooster.fr/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wooster-badge
 * Domain Path: /languages
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Include the main plugin class.
require_once plugin_dir_path(__FILE__) . 'includes/wooster-settings.php';
// Include added functionnalities
include_once plugin_dir_path(__FILE__) . 'includes/wooster-functions.php';
// Include added admin contents
include_once plugin_dir_path(__FILE__) . 'includes/wooster-admin-contents.php';
// Include added contents
include_once plugin_dir_path(__FILE__) . 'includes/wooster-contents.php';
// Include logo SVG construction
include_once plugin_dir_path(__FILE__) . 'includes/wooster-logo-svg.php';
// Include functions for visuels page
include_once plugin_dir_path(__FILE__) . 'includes/wooster-visuels-grid.php';
// Include functions for visuels page
include_once plugin_dir_path(__FILE__) . 'includes/wooster-logo-svg-upgrade.php';
// Include the updater
include_once plugin_dir_path(__FILE__) . 'includes/wooster-updater.php';