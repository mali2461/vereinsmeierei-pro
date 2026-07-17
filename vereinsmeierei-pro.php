<?php
/**
 * Plugin Name:       Vereinsmeierei Pro
 * Plugin URI:        https://vereinsmeierei-pro.mali24.de
 * Description:       Modulare Vereinsverwaltung für WordPress.
 * Version:           0.1.0-alpha.1
 * Requires at least: 6.5
 * Requires PHP:      8.2
 * Author:            Christian & Rob
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vereinsmeierei-pro
 * Domain Path:       /languages
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

define('VMP_VERSION', '0.1.0-alpha.1');
define('VMP_PLUGIN_FILE', __FILE__);
define('VMP_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('VMP_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once VMP_PLUGIN_PATH . 'app/Core/Autoloader.php';

\VereinsmeiereiPro\Core\Autoloader::register();

$app = new \VereinsmeiereiPro\Core\Application();
$app->run();