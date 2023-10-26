<?php

namespace Brace;

abstract class ComponentController extends Singleton
{
    public $enqueue = false;

    public function init()
    {
        if (is_admin()) {
            return;
        }

        add_action('init', array($this, 'register_styles'));
        add_action('init', array($this, 'register_scripts'));

        add_action('wp_footer', array($this, 'print_styles'));
        add_action('wp_footer', array($this, 'print_scripts'));
    }

    public function get_styles()
    {
        return array();
    }

    public function get_scripts()
    {
        return array();
    }

    public function get_asset_url($args, $env = 'production')
    {
        if ($env === 'production' && isset($args['production'])) {
            return $args['production'];
        }

        if ($env === 'development' && isset($args['development'])) {
            return $args['development'];
        }

        return '';
    }

    public function register_styles()
    {
        $current_env = brace_get_current_env();

        foreach ($this->get_styles() as $style_id => $style_args) {
            $style_path = $this->get_asset_url($style_args, $current_env);

            if (!$style_path) {
                continue;
            }

            wp_register_style($style_id, $style_path);
        }
    }

    public function register_scripts()
    {
        $current_env = brace_get_current_env();

        foreach ($this->get_scripts() as $script_id => $script_args) {
            $script_path = $this->get_asset_url($script_args, $current_env);

            if (!$script_path) {
                continue;
            }

            wp_register_script($script_id, $script_path);

            if (isset($script_args['vars_name']) && isset($script_args['vars'])) {
                wp_localize_script($script_id, $script_args['vars_name'], $script_args['vars']);
            }
        }
    }

    public function print_styles()
    {
        if (!$this->enqueue) {
            return;
        }

        foreach ($this->get_styles() as $style_id => $_) {
            wp_print_styles($style_id);
        }
    }

    public function print_scripts()
    {
        if (!$this->enqueue) {
            return;
        }

        foreach ($this->get_scripts() as $script_id => $_) {
            wp_print_scripts($script_id);
        }
    }

    public function enqueue()
    {
        $this->enqueue = true;
    }

    public function dequeue()
    {
        $this->enqueue = false;
    }
}
