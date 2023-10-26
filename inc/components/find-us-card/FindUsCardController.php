<?php

namespace Brace;

class FindUsCardController extends ComponentController
{

    public function init()
    {
        parent::init();

        $this->setup_classes();

        add_ajax_action('location_team_member_card', array($this, 'ajax_get_card'));
    }

    /**
     * @return FindUsCardController
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    public function get_scripts()
    {
        return array(
            'find-us-card' => array(
                'development' => 'http://localhost:3000/js/find-us-card.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/find-us-card.js',
                'vars_name'   => 'findUsCardProps',
                'vars'        => array(
                    'ajaxUrl'              => admin_url('admin-ajax.php'),
                    'containerClassName'   => $this->classes['container'],
                    'placeholderClassName' => $this->classes['placeholder']
                )
            )
        );
    }

    public function setup_classes()
    {
        $this->classes = apply_filters('find_us_card_classes', array(
            'container'   => 'find-us-wrap',
            'card'        => 'find-us-card',
            'placeholder' => 'find-us-placeholder'
        ));
    }

    public function create($args = array())
    {
        require_once(dirname(__FILE__) . '/FindUsCard.php');
        return new FindUsCard($args);
    }

    public function render($args = array())
    {
        $this->enqueue();
        return $this->create($args)->render();
    }

    public function ajax_get_card()
    {
        $data = json_decode(file_get_contents('php://input'));

        if (!isset($data->location)) {
            return wp_send_json_error("location is a required field");
        }

        $location = get_location($data->location);

        $no_results_markup = get_template('template-parts/find-us-card/card-no-results');

        if (!$location) {
            return wp_send_json_error("Location {$data->location} could not be found");
        }

        $team_member = get_field('team_member', $location->ID);
        $locations = array_merge(
            array_map('get_post', get_post_ancestors($location)),
            array($location)
        );

        if (!$team_member) {
            wp_send_json_success(array(
                'markup'   => $no_results_markup
            ));
        }

        $markup = get_template('template-parts/find-us-card/card', apply_filters('team_member_card_args', array(
            'class'     => $this->classes['card'],
            'name'      => $team_member->post_title,
            'role'      => get_field('role', $team_member->ID),
            'telephone' => get_field('telephone', $team_member->ID),
            'email'     => get_field('email', $team_member->ID),
            'image'     => get_field('image', $team_member->ID),
            'locations' => $locations,
            'email_ccs' => get_field('manager_ccs', $location->ID)
        ), $team_member));

        wp_send_json_success(array(
            'markup'   => $markup
        ));
    }
}
