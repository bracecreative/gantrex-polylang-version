<?php

namespace Brace\ACF;

class Field extends Base
{
    protected $type = 'text';

    protected $typeProperties = array();

    protected $providedProperties = array();

    public function __construct($title, $type, $provided = array())
    {
        $this->setType($type);

        if (is_array($provided)) {
            $this->providedProperties = $provided;
        }

        parent::__construct($title);
    }
    public function setType($typeName)
    {
        $type = Util::getType($typeName);

        if (!$type) {
            return;
        }
        
        $this->type = $type['name'];
        $this->typeProperties = isset($type['properties']) ? $type['properties'] : array();
    }
    protected function props($props)
    {
        return array_merge(array(
            'graphql_typename' => '',
            'show_in_graphql' => 1,
            'type' => $this->type,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ), $this->typeProperties, $this->providedProperties);
    }
}
