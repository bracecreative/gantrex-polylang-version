<?php

namespace Brace;

class GF_Field_Location_Selector extends \GF_Field
{
    public $type = 'location-selector';

    public function get_form_editor_field_title()
    {
        return esc_attr__('Location Selector', 'gantrex');
    }

    public function get_form_editor_field_icon()
    {
        return 'gform-icon--place';
    }

    public function get_form_editor_field_description()
    {
        return esc_attr__('Allows users to choose from company locations.', 'gantrex');
    }

    function get_form_editor_field_settings()
    {
        return array(
            'conditional_logic_field_setting',
            'prepopulate_field_setting',
            'error_message_setting',
            'label_setting',
            'label_placement_setting',
            'admin_label_setting',
            'size_setting',
            'rules_setting',
            'visibility_setting',
            'default_value_setting',
            'placeholder_setting',
            'description_setting',
            'css_class_setting'
        );
    }

    public function is_conditional_logic_supported()
    {
        return true;
    }

    public function validate($value, $form)
    {
        $post = get_location($value);

        if (!$post) {
            $this->failed_validation = true;
            $this->validation_message = __('Invalid location provided', 'gantrex');

            return;
        }

        $children = get_posts(array_merge(LocationSelectorController::$query_args, array('post_parent' => $post->ID)));

        if (count($children) > 0) {
            $this->failed_validation = true;
            $this->validation_message = __('Please choose the most specific location', 'gantrex');
        }
    }

    public function get_field_input($form, $value = '', $entry = null)
    {
        $form_id         = absint($form['id']);
        $is_entry_detail = $this->is_entry_detail();
        $is_form_editor  = $this->is_form_editor();

        $id       = $this->id;
        $field_id = $is_entry_detail || $is_form_editor || $form_id == 0 ? "input_$id" : 'input_' . $form_id . "_$id";

        $size                   = $this->size;
        $class_suffix           = $is_entry_detail ? '_admin' : '';
        $class                  = $size . $class_suffix;
        $css_class              = trim(esc_attr($class) . ' gfield_select');
        $tabindex               = $this->get_tabindex();
        $disabled_text          = $is_form_editor ? 'disabled="disabled"' : '';
        $required_attribute     = $this->isRequired ? 'aria-required="true"' : '';
        $invalid_attribute      = $this->failed_validation ? 'aria-invalid="true"' : 'aria-invalid="false"';
        $describedby_attribute = $this->get_aria_describedby();
        $autocomplete_attribute = $this->enableAutocomplete ? $this->get_field_autocomplete_attribute() : '';

        $ancestors = get_post_ancestors($value);
        $items     = array_merge($ancestors, array($value));

        $children = $value ? get_posts(array_merge(LocationSelectorController::$query_args, array('post_parent' => $value))) : array();

        if (count($children)) {
            $items[] = '';
        }

        $markup    = array();

        foreach ($items as $item_key => $item) {
            $instance = LocationSelectorController::getInstance()->create(array(
                'parent'                 => $item_key ? $items[$item_key - 1] : 0,
                'name'                   => sprintf('input_%d', $id),
                'id'                     => $field_id,
                'class'                  => $css_class,
                'value'                  => $item,
                'tabindex'               => $tabindex,
                'disabled_text'          => $disabled_text,
                'required_attribute'     => $required_attribute,
                'invalid_attribute'      => $invalid_attribute,
                'describedby_attribute'  => $describedby_attribute,
                'autocomplete_attribute' => $autocomplete_attribute
            ));

            $markup[] = $instance->render();
        }

        return get_template('template-parts/location-selector/container', array(
            'container_class' => LocationSelectorController::getInstance()->classes['container'],
            'loader_class'    => LocationSelectorController::getInstance()->classes['loader'],
            'markup' => join($markup)
        ));
    }

    public function get_value_entry_list($value, $entry, $field_id, $columns, $form)
    {
        return $this->get_value_entry($value);
    }

    public function get_value_entry_detail($value, $currency = '', $use_text = false, $format = 'html', $media = 'screen')
    {
        return $this->get_value_entry($value);
    }

    public function get_value_entry($value)
    {
        $location = get_location($value);

        if (!$location) {
            return 'Invalid location';
        }

        $ancestors = get_post_ancestors($location);
        $ancestor_titles = array_map('get_the_title', $ancestors);
        $ancestor_chain = join(' > ', $ancestor_titles);

        return sprintf(
            '%s%s (#%d)',
            $ancestor_chain ? sprintf('%s > ', $ancestor_chain) : '',
            $location->post_title,
            $location->ID
        );
    }
}
