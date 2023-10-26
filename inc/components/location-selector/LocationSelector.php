<?php

namespace Brace;

class LocationSelector
{
    private $locations = array();

    private $parent = 0;

    private $name = '';

    private $id = '';

    private $class = '';

    private $value = '';

    private $tabindex = '';

    private $disabled_text = '';

    private $required_attribute = '';

    private $invalid_attribute = '';

    private $describedby_attribute = '';

    private $autocomplete_attribute = '';

    public function __construct($args = array())
    {
        if (isset($args['parent'])) {
            $this->parent = $args['parent'];
        }

        if (isset($args['name'])) {
            $this->name = $args['name'];
        }

        if (isset($args['id'])) {
            $this->id = $args['id'];
        }

        if (isset($args['class'])) {
            $this->class = $args['class'];
        }

        if (isset($args['value'])) {
            $this->value = $args['value'];
        }

        if (isset($args['tabindex'])) {
            $this->tabindex = $args['tabindex'];
        }

        if (isset($args['disabled_text'])) {
            $this->disabled_text = $args['disabled_text'];
        }

        if (isset($args['required_attribute'])) {
            $this->required_attribute = $args['required_attribute'];
        }

        if (isset($args['invalid_attribute'])) {
            $this->invalid_attribute = $args['invalid_attribute'];
        }

        if (isset($args['describedby_attribute'])) {
            $this->describedby_attribute = $args['describedby_attribute'];
        }

        if (isset($args['autocomplete_attribute'])) {
            $this->autocomplete_attribute = $args['autocomplete_attribute'];
        }

        $this->locations = $this->query_locations();
    }

    public function query_locations()
    {
        $query_args = array_merge(LocationSelectorController::$query_args, array(
            'post_parent'    => $this->parent
        ));

        $query = new \WP_Query($query_args);

        if (!$query->have_posts()) {
            return array();
        }

        return $query->posts;
    }

    public function render()
    {
        return get_template('template-parts/location-selector/select-field', array(
            'container_class'        => \Brace\LocationSelectorController::getInstance()->classes['container'],
            'item_class'             => \Brace\LocationSelectorController::getInstance()->classes['item'],
            'class'                  => \Brace\LocationSelectorController::getInstance()->classes['select'] . ($this->class ? " {$this->class}" : ''),
            'parent'                 => $this->parent,
            'name'                   => $this->name,
            'locations'              => $this->locations,
            'value'                  => $this->value,
            'id'                     => $this->id,
            'tabindex'               => $this->tabindex,
            'disabled_text'          => $this->disabled_text,
            'required_attribute'     => $this->required_attribute,
            'invalid_attribute'      => $this->invalid_attribute,
            'describedby_attribute'  => $this->describedby_attribute,
            'autocomplete_attribute' => $this->autocomplete_attribute,
        ));
    }
}
