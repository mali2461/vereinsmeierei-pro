<?php
/**
 * Vereinsmeierei Pro
 *
 * Verwaltet alle WordPress-Hooks.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Core;

use VereinsmeiereiPro\Admin\Admin;

defined('ABSPATH') || exit;

class Loader
{
    /**
     * Registriert alle WordPress-Hooks.
     */
    public function register(): void
    {
        $admin = new Admin();

        add_action('admin_menu', [$admin, 'registerMenu']);
    }
}