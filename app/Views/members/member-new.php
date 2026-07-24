<?php
/**
 * Neues Mitglied / Mitglied bearbeiten
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

use VereinsmeiereiPro\Models\Member;
use VereinsmeiereiPro\Services\MemberService;

defined('ABSPATH') || exit;

$service = new MemberService();

$message = '';
$isEdit = false;
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$member = new Member();

if ($id > 0) {

    $data = $service->findById($id);

    if ($data !== null) {

        $isEdit = true;

        $member->id            = (int) $data['id'];
        $member->member_number = (string) $data['member_number'];
        $member->firstname     = (string) $data['firstname'];
        $member->lastname      = (string) $data['lastname'];
        $member->email         = (string) $data['email'];
        $member->phone         = (string) $data['phone'];
        $member->mobile        = (string) $data['mobile'];
        $member->street        = (string) $data['street'];
        $member->zip           = (string) $data['zip'];
        $member->city          = (string) $data['city'];
        $member->birthday      = (string) $data['birthday'];
        $member->joined_at     = (string) $data['joined_at'];
        $member->status        = (string) $data['status'];

    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    check_admin_referer('vmp_save_member');

    $member->firstname = sanitize_text_field($_POST['firstname'] ?? '');
    $member->lastname  = sanitize_text_field($_POST['lastname'] ?? '');
    $member->email     = sanitize_email($_POST['email'] ?? '');

    if (!$isEdit) {

        $member->member_number = 'M' . time();
        $member->joined_at = current_time('Y-m-d');

        if ($service->save($member)) {

            $message = 'Mitglied wurde erfolgreich gespeichert.';

        } else {

            $message = 'Fehler beim Speichern.';
        }

    } else {

        if ($service->update($member->id, $member)) {

            $message = 'Mitglied wurde erfolgreich aktualisiert.';

        } else {

            $message = 'Fehler beim Aktualisieren.';
        }
    }
}
?>

<div class="wrap">

    <h1>
        <?php echo $isEdit ? 'Mitglied bearbeiten' : 'Neues Mitglied'; ?>
    </h1>

    <?php if (!empty($message)) : ?>

        <div class="notice notice-success is-dismissible">
            <p><?php echo esc_html($message); ?></p>
        </div>

    <?php endif; ?>

    <form method="post">

        <?php wp_nonce_field('vmp_save_member'); ?>

        <table class="form-table">

            <tr>
                <th><label for="firstname">Vorname</label></th>
                <td>
                    <input
                        type="text"
                        id="firstname"
                        name="firstname"
                        class="regular-text"
                        required
                        value="<?php echo esc_attr($member->firstname); ?>"
                    >
                </td>
            </tr>

            <tr>
                <th><label for="lastname">Nachname</label></th>
                <td>
                    <input
                        type="text"
                        id="lastname"
                        name="lastname"
                        class="regular-text"
                        required
                        value="<?php echo esc_attr($member->lastname); ?>"
                    >
                </td>
            </tr>

            <tr>
                <th><label for="email">E-Mail</label></th>
                <td>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="regular-text"
                        value="<?php echo esc_attr($member->email); ?>"
                    >
                </td>
            </tr>

        </table>

        <?php
        submit_button(
            $isEdit
                ? 'Änderungen speichern'
                : 'Mitglied speichern'
        );
        ?>

    </form>

</div>