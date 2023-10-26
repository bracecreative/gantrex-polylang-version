<?php

namespace Brace\ACF;

class FlexibleContent extends BaseWithChildren
{
    protected $childrenKey = 'layouts';

    protected $indexType = 'key';

    protected function props($props)
    {
        return array(
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'button_label' => 'Add Row',
            'min' => '',
            'max' => '',
        );
    }
}
