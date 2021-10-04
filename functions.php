<?php


require_once get_template_directory( ) . "/vendor/autoload.php";

use Codew2\helpers\Menu;
use Codew2\helpers\EnqueueScripts;

/**
 * use
 */

$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); //gets version

 new EnqueueScripts(THEME_VERSION);

 new Menu();

