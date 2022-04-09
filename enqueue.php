<?php add_action('wp_enqueue_scripts' , 'my_scripts');
    function my_scripts() {
        wp_register_style('fontAwesome', get_template_directory_uri().'/css/font-awesome.css');
        wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
        wp_register_style('style', get_template_directory_uri().'/style.css');
        wp_register_script('jquery', get_template_directory_uri().'/js/jquery.js');
        wp_register_script('script', get_template_directory_uri().'/js/script.js');
        wp_enqueue_style('fontAwesome');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('style');
        wp_enqueue_script('script');
        wp_enqueue_script('jquery');
    }
    ?>

    
