<?php
namespace Codew2\helpers;

/**
 * Create menu 
 */

class Menu{

    public function __construct()
    {
        add_action( 'init', array($this, 'register_my_menus' ));
    }
    
    public function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Menu principal' ),
            'extra-menu' => __( 'Manu secondaire' )
           )
         );
       }
 }