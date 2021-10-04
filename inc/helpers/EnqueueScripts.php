<?php
namespace Codew2\helpers;

class EnqueueScripts {

    public $version;
    public function __construct($version){
        $this->version = $version;
        echo $this->version;
        add_action( "wp_enqueue_scripts", array($this, "enqueue_scripts"));
    }


    function enqueue_scripts(){
        wp_enqueue_style( "codew-fontawsome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css", null, $this->version, "all" );
        wp_enqueue_style( "codew-main", get_stylesheet_directory_uri(  ) . "/assets/css/main.css", null, $this->version, "all" );

        wp_enqueue_script( "codew-app", get_stylesheet_directory_uri(  ) . "/assets/js/app.js", null, $this->version, true );
        
    }
}