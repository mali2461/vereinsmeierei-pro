<?php
/**
 * Vereinsmeierei Pro
 *
 * Hauptklasse des Plugins.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Core;

use VereinsmeiereiPro\Modules\Members\Members;

defined('ABSPATH') || exit;

class Application
{
    /**
     * Startet das Plugin.
     */
    public function run(): void
    {
        // WordPress-Hooks registrieren
        $loader = new Loader();
        $loader->register();

        // Mitglieder-Modul initialisieren
        $members = new Members();
        $members->register();
    }
}