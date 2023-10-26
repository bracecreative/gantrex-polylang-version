<?php

namespace Brace;

class ShortcodeManager extends Singleton
{
    /**
     * @return ShortcodeManager
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    public function init()
    {
        add_action('init', array($this, 'add_shortcodes'));

        return $this;
    }

    public function register($name, $args = array())
    {
        $this->shortcodes[$name] = $args;
    }

    public function add_shortcodes()
    {
        foreach ($this->shortcodes as $tag => $args) {
            add_shortcode($tag, array($this, 'callback'));
        }
    }

    public function callback($atts = array(), $content = null, $shortcode)
    {
        foreach ($this->shortcodes as $tag => $args) {
            if ($tag !== $shortcode) {
                continue;
            }

            if (!isset($args['callback']) || !is_callable($args['callback'])) {
                continue;
            }

            $callback = $args['callback'];

            $shortcode_pairs = isset($args['attr_pairs']) ? $args['attr_pairs'] : array();
            $shortcode_args  = isset($args['args']) ? $args['args'] : array();

            $atts = shortcode_atts($shortcode_pairs, $atts, $shortcode);
            $args = array_merge(
                $atts,
                array('content' => $content),
                $shortcode_args
            );

            return call_user_func($callback, $args);
        }
    }

    public function render($tag, $args)
    {
        if (!isset($args['callback']) || !is_callable($args['callback'])) {
            return;
        }

        $shortcode_args = isset($args['args']) ? $args['args'] : array();

        return call_user_func($args['callback'], $shortcode_args);
    }
}
