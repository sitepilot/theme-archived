<?php

namespace Sitepilot\Theme;

use WP_Theme;

final class Theme
{
    /**
     * WP theme object.
     * 
     * @var WP_Theme
     */
    public $theme;

    /**
     * Theme colors.
     * 
     * @var array
     */
    public $colors = [
        [
            'slug' => 'primary',
            'name' => 'Primary',
            'color' => '#1d4ed8'
        ], [
            'slug' => 'secondary',
            'name' => 'Secondary',
            'color' => '#2563eb'
        ], [
            'slug' => 'white',
            'name' => 'White',
            'color' => '#ffffff'
        ], [
            'slug' => 'black',
            'name' => 'Black',
            'color' => '#000000'
        ]
    ];

    /**
     * Initialize theme.
     *
     * @return void
     */
    public function __construct()
    {
        $this->theme = wp_get_theme();

        /* Filters */
        add_filter('sp_client_website', '__return_true');

        /* Actions */
        add_action('after_setup_theme', [$this, 'action_add_theme_support']);
        add_action('wp_enqueue_scripts', [$this, 'action_enqueue_scripts']);
        add_action('enqueue_block_editor_assets', [$this, 'action_enqueue_scripts']);
    }

    /**
     * Register theme styles and scripts.
     * 
     * @return void
     */
    public function action_enqueue_scripts(): void
    {
        $version = strpos($this->theme->version, '-dev') ? time() : $this->theme->version;

        /* Styles */
        wp_enqueue_style($this->theme->stylesheet, get_stylesheet_directory_uri() . '/assets/dist/css/theme.css', [], $version);

        /* Scripts */
        wp_enqueue_script($this->theme->stylesheet, get_stylesheet_directory_uri() .  '/assets/dist/js/theme.js', ['jquery'], $version, true);
    }

    /**
     * Add theme support.
     *
     * @return void
     */
    public function action_add_theme_support(): void
    {
        // Disable Custom Colors
        add_theme_support('disable-custom-colors');

        // Editor Color Palette
        add_theme_support('editor-color-palette', $this->colors);
    }
}
