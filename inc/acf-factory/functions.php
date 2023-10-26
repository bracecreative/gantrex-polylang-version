<?php

namespace Brace\ACF;

function fields($title, $location)
{
    return new Fields($title, $location);
}

function field($title, $type)
{
    return new Field($title, $type);
}

function flexibleContent($title)
{
    return new FlexibleContent($title);
}

function layout($title)
{
    return new Layout($title);
}

function repeater($title)
{
    return new Repeater($title);
}

function group($title)
{
    return new Group($title);
}
