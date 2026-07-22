<?php
/**
 * Mitgliedsmodell
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Models;

defined('ABSPATH') || exit;

class Member
{
    public int $id = 0;

    public string $firstname = '';

    public string $lastname = '';

    public string $email = '';

    public string $phone = '';

    public string $mobile = '';

    public string $street = '';

    public string $zip = '';

    public string $city = '';

    public string $birthday = '';

    public string $member_number = '';

    public string $joined_at = '';

    public string $status = 'aktiv';
}