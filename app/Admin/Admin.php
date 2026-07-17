<?php
/**
 * Verwaltung des Adminbereichs.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Admin;

defined('ABSPATH') || exit;

class Admin
{
    /**
     * Registriert das Admin-Menü.
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

        add_submenu_page(
            'vereinsmeierei-pro',
            'Dashboard',
            'Dashboard',
            'manage_options',
            'vereinsmeierei-pro',
            [$this, 'dashboard']
        );

        add_submenu_page(
            'vereinsmeierei-pro',
            'Mitglieder',
            'Mitglieder',
            'manage_options',
            'vereinsmeierei-pro-members',
            [$this, 'members']
        );
    }

    /**
     * Dashboard anzeigen.
     */
    public function dashboard(): void
    {
        require_once VMP_PLUGIN_PATH . 'app/Views/dashboard.php';
    }

    /**
     * Mitgliederseite anzeigen.
     */
    public function members(): void
    {
        require_once VMP_PLUGIN_PATH . 'app/Views/members.php';
    }
}