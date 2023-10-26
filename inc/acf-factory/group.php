<?php

namespace Brace\ACF;

class Group extends BaseWithChildren
{
    protected $childrenKey = 'sub_fields';

    protected function props($props)
    {
        return array(
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'layout' => 'block',
        );
    }
}
