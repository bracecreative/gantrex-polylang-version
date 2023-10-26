<?php

namespace Brace;

class DocumentColumn
{
    private $column = '';

    private $label = '';

    public function __construct($column, $label)
    {
        $this->column = $column;
        $this->label  = $label;
    }

    public function get_sort_link()
    {
        return add_query_arg('sort', $this->column);
    }

    public function get_label()
    {
        return $this->label;
    }
}
