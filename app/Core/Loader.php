<?php
/**
 * Loader
 *
 * Registriert alle WordPress-Hooks.
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
     * Registriert alle Hooks.
     */
    public function register(): void
    {
        $admin = new Admin();

        add_action(
            'admin_menu',
            [$admin, 'registerMenu']
        );
    }
}