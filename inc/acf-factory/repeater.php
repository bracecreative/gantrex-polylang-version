<?php

namespace Brace\ACF;

class Repeater extends BaseWithChildren
{
    protected $childrenKey = 'sub_fields';

    protected function props($props)
    {
        return array(
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => '',
        );
    }
}
