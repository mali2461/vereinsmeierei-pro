<?php

declare(strict_types=1);

namespace Vereinsmeierei\Core;

class Application
{
    public function boot(): void
    {
        add_action('admin_menu', [$this, 'registerAdminMenu']);
    }

    public function registerAdminMenu(): void
    {
        add_menu_page(
            __('Vereinsmeierei Pro', 'vereinsmeierei-pro'),
            __('Vereinsmeierei Pro', 'vereinsmeierei-pro'),
            'manage_options',
            'vereinsmeierei-pro',
            [$this, 'renderDashboard'],
            'dashicons-groups',
            30
        );
    }

    public function renderDashboard(): void
    {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__('Vereinsmeierei Pro', 'vereinsmeierei-pro') . '</h1>';
        echo '<p>' . esc_html__('Willkommen zu Build 0001.', 'vereinsmeierei-pro') . '</p>';
        echo '</div>';
    }
}