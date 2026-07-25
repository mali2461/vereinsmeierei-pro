<?php
/**
 * Mitgliederübersicht
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

use VereinsmeiereiPro\Services\MemberService;

defined('ABSPATH') || exit;

$service = new MemberService();
$members = $service->findAll();
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
                    <th>Aktionen</th>
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
                    <td>

                        <a
                            href="?page=vereinsmeierei-pro-member-new&id=<?php echo (int) $member['id']; ?>"
                            class="button button-small"
                        >
                            Bearbeiten
                        </a>

                        <a
                            href="?page=vereinsmeierei-pro-member-new&delete=<?php echo (int) $member['id']; ?>"
                            class="button button-small button-link-delete"
                            onclick="return confirm('Mitglied wirklich löschen?');"
                        >
                            Löschen
                        </a>

                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>