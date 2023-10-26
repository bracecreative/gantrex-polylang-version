<?php

namespace Brace;

class LocationSelectorController extends ComponentController
{
    public $classes = array();

    static $query_args = array(
        'post_status'    => 'publish',
        'post_type'      => 'location',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
        'ignore_custom_sort' => true
    );

    public function init()
    {
        parent::init();

        $this->setup_classes();

        add_ajax_action('location_selector_children', array($this, 'ajax_children'));
    }

    /**
     * @return LocationSelectorController
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    public function get_styles()
    {
        return array(
            'location-selector' => array(
                'production'  => get_stylesheet_directory_uri() . '/dist/css/location-selector.css',
            )
        );
    }

    public function get_scripts()
    {
        return array(
            'select2' => array(
                'development' => get_stylesheet_directory_uri() . '/src/js/select2.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/select2.js',
            ),
            'location-selector' => array(
                'development' => 'http://localhost:3000/js/location-selector.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/location-selector.js',
                'vars_name'   => 'locationSelectorProps',
                'vars'        => array(
                    'ajaxUrl'            => admin_url('admin-ajax.php'),
                    'containerClassName' => $this->classes['container'],
                    'itemClassName'      => $this->classes['item'],
                    'selectClassName'    => $this->classes['select'],
                    'loaderClassName'    => $this->classes['loader']
                )
            )
        );
    }

    public function setup_classes()
    {
        $this->classes = apply_filters('location_selector_classes', array(
            'container' => 'location-selector-wrap',
            'item'      => 'location-selector-item',
            'loader'    => 'location-loader',
            'select'    => 'location-selector'
        ));
    }

    public function create($args = array())
    {
        $this->enqueue();

        require_once(dirname(__FILE__) . '/LocationSelector.php');

        return new LocationSelector($args);
    }

    public function ajax_children()
    {
        $data = json_decode(file_get_contents('php://input'));

        if (!isset($data->parent)) {
            return wp_send_json_error("parent is a required field");
        }

        $instance = LocationSelectorController::getInstance()->create(array(
            'parent' => $data->parent
        ));

        wp_send_json_success(array(
            'markup' => $instance->render()
        ));
    }
}
