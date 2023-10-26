<?php

namespace Brace\ACF;

class Util
{
    public static function mapToArray($field)
    {
        return $field->toArray();
    }

    public static function kebabToSnake($kebab)
    {
        return str_replace('-', '_', $kebab);
    }

    public static function kebabToCamel($kebab)
    {
        return lcfirst(str_replace('-', '', ucwords($kebab, '-')));
    }

    public static function getTypes()
    {
        return array(
            array(
                'name' => 'text',
                'properties' => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                )
            ),
            array(
                'name' => 'textarea',
                'properties' => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                )
            ),
            array(
                'name' => 'number',
                'properties' => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                )
            ),
            array(
                'name' => 'range',
                'properties' => array(
                    'default_value' => '',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                    'prepend' => '',
                    'append' => '',
                )
            ),
            array(
                'name' => 'email',
                'properties' => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                )
            ),
            array(
                'name' => 'url',
                'properties' => array(
                    'default_value' => '',
                    'placeholder' => '',
                )
            ),
            array(
                'name' => 'password',
                'properties' => array(
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                )
            ),
            array(
                'name' => 'unique_id',
                'properties' => array()
            ),
            array(
                'name' => 'image',
                'properties' => array(
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                )
            ),
            array(
                'name' => 'file',
                'properties' => array(
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => '',
                )
            ),
            array(
                'name' => 'wysiwyg',
                'properties' => array(
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'delay' => 0,
                )
            ),
            array(
                'name' => 'oembed',
                'properties' => array(
                    'width' => '',
                    'height' => '',
                )
            ),
            array(
                'name' => 'gallery',
                'properties' => array(
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'insert' => 'append',
                    'library' => 'all',
                    'min' => '',
                    'max' => '',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                )
            ),
            array(
                'name' => 'select',
                'properties' => array(
                    'choices' => array(),
                    'default_value' => false,
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                )
            ),
            array(
                'name' => 'checkbox',
                'properties' => array(
                    'choices' => array(),
                    'allow_custom' => 0,
                    'default_value' => array(),
                    'layout' => 'vertical',
                    'toggle' => 0,
                    'return_format' => 'value',
                    'save_custom' => 0,
                )
            ),
            array(
                'name' => 'radio',
                'properties' => array(
                    'choices' => array(),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                )
            ),
            array(
                'name' => 'button_group',
                'properties' => array(
                    'choices' => array(),
                    'allow_null' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                )
            ),
            array(
                'name' => 'true_false',
                'properties' => array(
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                )
            ),
            array(
                'name' => 'link',
                'properties' => array(
                    'return_format' => 'array',
                )
            ),
            array(
                'name' => 'post_object',
                'properties' => array(
                    'post_type' => '',
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'object',
                    'ui' => 1,
                )
            ),
            array(
                'name' => 'page_link',
                'properties' => array(
                    'post_type' => '',
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'allow_archives' => 1,
                    'multiple' => 0,
                )
            ),
            array(
                'name' => 'relationship',
                'properties' => array(
                    'post_type' => '',
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                        2 => 'taxonomy',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => '',
                    'return_format' => 'object',
                )
            ),
            array(
                'name' => 'taxonomy',
                'properties' => array(
                    'taxonomy' => 'category',
                    'field_type' => 'checkbox',
                    'add_term' => 1,
                    'save_terms' => 0,
                    'load_terms' => 0,
                    'return_format' => 'id',
                    'multiple' => 0,
                    'allow_null' => 0,
                )
            ),
            array(
                'name' => 'user',
                'properties' => array(
                    'role' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'array',
                )
            ),
            array(
                'name' => 'google_map',
                'properties' => array(
                    'center_lat' => '',
                    'center_lng' => '',
                    'zoom' => '',
                    'height' => '',
                )
            ),
            array(
                'name' => 'date_picker',
                'properties' => array(
                    'display_format' => 'd/m/Y',
                    'return_format' => 'd/m/Y',
                    'first_day' => 1,
                )
            ),
            array(
                'name' => 'time_picker',
                'properties' => array(
                    'display_format' => 'g:i a',
                    'return_format' => 'g:i a',
                )
            ),
            array(
                'name' => 'color_picker',
                'properties' => array(
                    'default_value' => '',
                )
            ),
            array(
                'name' => 'message',
                'properties' => array(
                    'message' => '',
                    'new_lines' => 'wpautop',
                    'esc_html' => 0,
                )
            ),
            array(
                'name' => 'accordion',
                'properties' => array(
                    'open' => 0,
                    'multi_expand' => 0,
                    'endpoint' => 0,
                )
            ),
            array(
                'name' => 'tab',
                'properties' => array(
                    'placement' => 'top',
                    'endpoint' => 0,
                )
            ),
        );
    }

    public static function getType($typeName)
    {
        $types = self::getTypes();

        foreach ($types as $type) {
            if ($type['name'] === $typeName) {
                return $type;
            }
        }

        return false;
    }

    public static function isStringArray($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        foreach ($arr as $value) {
            if (!is_string($value)) {
                return false;
            }
        }

        return true;
    }
}
