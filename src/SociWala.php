<?php

namespace SocreativeNeeraj\SociWala;

class SociWala
{
    public static function render($type, $icon)
    {
        return "<a href='#'><i class='fa fa-$icon'></i></a>";
    }
}