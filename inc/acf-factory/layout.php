<?php

namespace Brace\ACF;

class Layout extends BaseWithChildren
{
    protected $childrenKey = 'sub_fields';

    protected function props($props)
    {
        return array(
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => '',
            'max' => '',
        );
    }
}
