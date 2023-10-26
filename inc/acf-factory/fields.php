<?php

namespace Brace\ACF;

class Fields extends BaseWithChildren
{
    protected $titleKey = 'title';

    private $location = '';

    public function __construct($title, $location)
    {
        $this->location = $location;
        parent::__construct($title);
    }

    protected function props($props)
    {
        return array(
            'location' => $this->getLocation(),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        );
    }

    public function getLocation()
    {
        if (gettype($this->location) === 'string') {
            return array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => $this->location,
                    ),
                ),
            );
        } elseif (Util::isStringArray($this->location)) {
            return array_map(function ($post_type) {
                return array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => $post_type
                    )
                );
            }, $this->location);
        }

        return $this->location;
    }
}
