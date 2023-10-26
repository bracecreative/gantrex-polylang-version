<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (class_exists('GF_Fields') && class_exists('GF_Field')) {
    require_once(dirname(__FILE__) . '/GF_Field_Location_Selector.php');
    require_once(dirname(__FILE__) . '/hooks.php');

    GF_Fields::register(new \Brace\GF_Field_Location_Selector());
}
