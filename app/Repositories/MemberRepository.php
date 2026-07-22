<?php
/**
 * Repository für Mitglieder.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Repositories;

use VereinsmeiereiPro\Models\Member;

defined('ABSPATH') || exit;

class MemberRepository
{
    /**
     * Tabellenname.
     */
    private string $table;

    public function __construct()
    {
        global $wpdb;

        $this->table = $wpdb->prefix . 'vmp_members';
    }

    /**
     * Speichert ein neues Mitglied.
     */
    public function save(Member $member): bool
    {
        global $wpdb;

        $result = $wpdb->insert(
            $this->table,
            [
                'member_number' => $member->member_number,
                'firstname'     => $member->firstname,
                'lastname'      => $member->lastname,
                'email'         => $member->email,
                'phone'         => $member->phone,
                'mobile'        => $member->mobile,
                'street'        => $member->street,
                'zip'           => $member->zip,
                'city'          => $member->city,
                'birthday'      => $member->birthday,
                'joined_at'     => $member->joined_at,
                'status'        => $member->status,
                'created_at'    => current_time('mysql'),
                'updated_at'    => current_time('mysql'),
            ]
        );

        return $result !== false;
    }

    /**
     * Liefert alle Mitglieder.
     */
    public function findAll(): array
    {
        global $wpdb;

        return $wpdb->get_results(
            "SELECT * FROM {$this->table} ORDER BY lastname, firstname",
            ARRAY_A
        );
    }
}