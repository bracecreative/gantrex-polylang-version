<?php

namespace Brace;

function get_template($path, $args = array())
{
    $path = "{$path}.php";
    $abs_path = path_join(get_stylesheet_directory(), $path);

    if (!is_file($abs_path)) {
        return;
    }

    extract($args);

    ob_start();
    require $abs_path;
    $content = ob_get_clean();

    return $content;
}

function template($path, $args = array())
{
    echo get_template($path, $args);
}

