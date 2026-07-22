<?php
/**
 * Erstellt die Mitgliedertabelle.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Database;

defined('ABSPATH') || exit;

class MemberTable
{
    /**
     * Erstellt die Datenbanktabelle.
     */
    public static function create(): void
    {
        global $wpdb;

        $table = $wpdb->prefix . 'vmp_members';

        $charset = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE {$table} (

            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,

            member_number VARCHAR(50) NOT NULL,

            firstname VARCHAR(100) NOT NULL,

            lastname VARCHAR(100) NOT NULL,

            email VARCHAR(255) DEFAULT '',

            phone VARCHAR(50) DEFAULT '',

            mobile VARCHAR(50) DEFAULT '',

            street VARCHAR(255) DEFAULT '',

            zip VARCHAR(20) DEFAULT '',

            city VARCHAR(100) DEFAULT '',

            birthday DATE NULL,

            joined_at DATE NULL,

            status VARCHAR(20) DEFAULT 'aktiv',

            created_at DATETIME NOT NULL,

            updated_at DATETIME NOT NULL,

            PRIMARY KEY (id),

            KEY lastname (lastname),

            KEY member_number (member_number)

        ) {$charset};";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        dbDelta($sql);
    }
}