<?php
/**
 * Mitgliederübersicht
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

use VereinsmeiereiPro\Repositories\MemberRepository;

defined('ABSPATH') || exit;

$repository = new MemberRepository();
$members = $repository->findAll();
?>

<div class="wrap">

    <h1 class="wp-heading-inline">Mitglieder</h1>

    <a href="?page=vereinsmeierei-pro-member-new" class="page-title-action">
        Neues Mitglied
    </a>

    <hr class="wp-header-end">

    <?php if (empty($members)) : ?>

        <div class="notice notice-info inline">
            <p>Es wurden noch keine Mitglieder angelegt.</p>
        </div>

    <?php else : ?>

        <table class="widefat striped">

            <thead>
                <tr>
                    <th>Mitgliedsnummer</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-Mail</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($members as $member) : ?>

                <tr>
                    <td><?php echo esc_html($member['member_number']); ?></td>
                    <td><?php echo esc_html($member['firstname']); ?></td>
                    <td><?php echo esc_html($member['lastname']); ?></td>
                    <td><?php echo esc_html($member['email']); ?></td>
                    <td><?php echo esc_html($member['status']); ?></td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>