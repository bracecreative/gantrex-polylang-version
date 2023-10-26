<?php

namespace Brace\ACF;

abstract class BaseWithChildren extends Base
{
    protected $childrenKey = 'fields';

    protected $indexType = 'numerical';

    protected $children = array();

    public function __construct($title)
    {
        parent::__construct($title);
    }

    public function add()
    {
        $children = func_get_args();
        
        foreach ($children as $child) {
            if (is_array($child)) {
                call_user_func_array(array($this, 'add'), $child);
                continue;
            }
            
            if ($this->indexType === 'numerical') {
                $this->children[] = $child;
            } elseif ($this->indexType === 'key') {
                $this->children[$child->key] = $child;
            }
        }

        return $this;
    }

    public function toArray($prefix = '')
    {
        $properties = $this->properties;

        if ($prefix) {
            $properties['key'] = "{$prefix}_{$properties['key']}";
        }

        $properties[$this->childrenKey] = array();
        foreach ($this->children as $childKey => $child) {
            $properties[$this->childrenKey][$childKey] = $child->toArray(($prefix ? "{$prefix}_" : '') . $this->key);
        }

        return $properties;
    }
}
