<?php
/**
 * Neues Mitglied
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

use VereinsmeiereiPro\Models\Member;
use VereinsmeiereiPro\Repositories\MemberRepository;

defined('ABSPATH') || exit;

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    check_admin_referer('vmp_save_member');

    $member = new Member();

    $member->firstname = sanitize_text_field($_POST['firstname'] ?? '');
    $member->lastname = sanitize_text_field($_POST['lastname'] ?? '');
    $member->email = sanitize_email($_POST['email'] ?? '');

    // Vorläufige Mitgliedsnummer
    $member->member_number = 'M' . time();

    // Eintrittsdatum = heute
    $member->joined_at = current_time('Y-m-d');

    $repository = new MemberRepository();

    if ($repository->save($member)) {

        $message = 'Mitglied wurde erfolgreich gespeichert.';

    } else {

        $message = 'Fehler beim Speichern.';
    }
}
?>

<div class="wrap">

    <h1>Neues Mitglied</h1>

    <?php if (!empty($message)) : ?>

        <div class="notice notice-success is-dismissible">
            <p><?php echo esc_html($message); ?></p>
        </div>

    <?php endif; ?>

    <form method="post">

        <?php wp_nonce_field('vmp_save_member'); ?>

        <table class="form-table">

            <tr>
                <th>
                    <label for="firstname">Vorname</label>
                </th>
                <td>
                    <input
                        type="text"
                        id="firstname"
                        name="firstname"
                        class="regular-text"
                        required
                    >
                </td>
            </tr>

            <tr>
                <th>
                    <label for="lastname">Nachname</label>
                </th>
                <td>
                    <input
                        type="text"
                        id="lastname"
                        name="lastname"
                        class="regular-text"
                        required
                    >
                </td>
            </tr>

            <tr>
                <th>
                    <label for="email">E-Mail</label>
                </th>
                <td>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="regular-text"
                    >
                </td>
            </tr>

        </table>

        <?php submit_button('Mitglied speichern'); ?>

    </form>

</div>