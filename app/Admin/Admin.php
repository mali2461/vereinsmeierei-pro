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
     * Dashboard-Ausgabe.
     */
    public function dashboard(): void
    {
        echo '<div class="wrap">';
        echo '<h1>Vereinsmeierei Pro</h1>';
        echo '<p>Willkommen im Maschinenraum.</p>';
        echo '</div>';
    }
}