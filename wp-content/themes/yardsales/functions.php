<?php

function cxl_load_resources(){
    
    wp_register_style('google-font-quicksand','https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    wp_register_style('google-font-roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap');
    wp_register_style('bootstrap-styles','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');

    wp_enqueue_style('yardsales-styles',get_template_directory_uri().'/assets/css/style.css',array("google-font-quicksand","google-font-roboto","bootstrap-styles"));
    wp_enqueue_script('yard-scripts',get_template_directory_uri().'/assets/js/script.js','','',true);
}

add_action('wp_enqueue_scripts','cxl_load_resources');

?>