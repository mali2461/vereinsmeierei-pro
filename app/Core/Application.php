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

defined('ABSPATH') || exit;

class Application
{
    /**
     * Startet das Plugin.
     */
    public function run(): void
    {
        $loader = new Loader();
        $loader->register();
    }
}