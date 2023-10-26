<?php

namespace Brace;

class DocumentFilter
{
    private $filter = '';

    private $label = '';

    private $multiple = false;

    public function __construct($filter, $args)
    {
        $this->filter = $filter;

        if (isset($args['label'])) {
            $this->label = $args['label'];
        }

        if (isset($args['multiple'])) {
            $this->multiple = $args['multiple'];
        }
    }

    public function get_name()
    {
        return $this->filter;
    }

    public function get_label()
    {
        return $this->label;
    }

    public function is_multiple()
    {
        return $this->multiple;
    }

    public function get_options()
    {
        return apply_filters("document_directory/filter_options/{$this->filter}", array());
    }
}
