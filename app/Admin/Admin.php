<?php
/**
 * Admin-Menü von Vereinsmeierei Pro
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Admin;

defined('ABSPATH') || exit;

class Admin
{
    /**
     * Registriert das Hauptmenü.
     */
    public function registerMenu(): void
    {
        add_menu_page(
            'Vereinsmeierei Pro',
            'Vereinsmeierei Pro',
            'manage_options',
            'vereinsmeierei-pro',
            [$this, 'dashboard'],
            'dashicons-groups',
            30
        );
    }

    /**
     * Zeigt das Dashboard an.
     */
    public function dashboard(): void
    {
        require_once VMP_PLUGIN_PATH . 'app/Views/dashboard.php';
    }
}