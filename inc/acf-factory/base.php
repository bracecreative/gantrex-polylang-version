<?php

namespace Brace\ACF;

abstract class Base
{
    protected $titleKey = 'label';

    protected $properties = array(
        'key' => ''
    );

    public function __construct($title)
    {
        $this->properties = $this->createProps($title);
    }

    public function __get($key)
    {
        if (!isset($this->properties[$key])) {
            return null;
        }

        return $this->properties[$key];
    }

    public function __set($key, $value)
    {
        $this->properties[$key] = $value;
        return $this;
    }

    public function set($key, $value = null)
    {
        if (is_array($key)) {
            $this->properties = array_merge($this->properties, $key);
        } else {
            $this->properties[$key] = $value;
        }

        return $this;
    }

    protected function props($props)
    {
        return array();
    }

    public function createProps($title)
    {
        $kebab = sanitize_title_with_dashes($title);
        $snake = Util::kebabToSnake($kebab);
        $graphqlField = Util::kebabToCamel($kebab);

        $properties = array(
            'key' => $snake,
            'name' => $snake,
            'show_in_graphql' => true
        );

        $properties[$this->titleKey] = $title;
        
        return array_merge($properties, $this->props($properties));
    }

    public function toArray($prefix = '')
    {
        if (!$prefix) {
            return $this->properties;
        }

        $properties = $this->properties;
        $properties['key'] = "{$prefix}_{$properties['key']}";

        return $properties;
    }

    public function wrap($args = array())
    {
        $args = wp_parse_args($args, $this->properties['wrapper']);
        $this->properties['wrapper'] = $args;

        return $this;
    }

    /**
     * Set the wrapper/width property of this field
     */
    public function width($number)
    {
        return $this->wrap(array('width' => $number));
    }
}
