<?php

namespace Brace;

class FindUsCard
{
    public function render()
    {
        $instance = LocationSelectorController::getInstance()->create();
        $location_selector = get_template('template-parts/location-selector/container', array(
            'container_class' => LocationSelectorController::getInstance()->classes['container'],
            'loader_class'    => LocationSelectorController::getInstance()->classes['loader'],
            'markup' => $instance->render()
        ));

        return get_template('template-parts/find-us-card/container', array(
            'container_class'   => FindUsCardController::getInstance()->classes['container'],
            'placeholder_class' => FindUsCardController::getInstance()->classes['placeholder'],
            'location_selector' => $location_selector
        ));
    }
}
