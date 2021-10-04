<?php
namespace Codew2\helpers;


class ThemeVersion {
    public function __construct(){
        $theme = wp_get_theme();
        return $theme->Version; //gets version written in your style.css
    }
}

