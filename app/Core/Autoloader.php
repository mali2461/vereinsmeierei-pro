<?php
/**
 * Vereinsmeierei Pro
 *
 * Autoloader
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Core;

defined('ABSPATH') || exit;

class Autoloader
{
    /**
     * Registriert den Autoloader.
     */
    public static function register(): void
    {
        spl_autoload_register([self::class, 'autoload']);
    }

    /**
     * Lädt Plugin-Klassen automatisch.
     *
     * @param string $class Vollständiger Klassenname.
     */
    private static function autoload(string $class): void
    {
        $prefix = 'VereinsmeiereiPro\\';

        // Nur Klassen unseres Plugins laden.
        if (! str_starts_with($class, $prefix)) {
            return;
        }

        // Namespace-Präfix entfernen.
        $relativeClass = substr($class, strlen($prefix));

        // Dateipfad erzeugen.
        $file = VMP_PLUGIN_PATH
            . 'app/'
            . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass)
            . '.php';

        if (is_file($file)) {
            require_once $file;
        }
    }
}