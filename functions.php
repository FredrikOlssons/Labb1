<?php
include('enqueue.php');

// Lägg till support för saker
    add_theme_support('post-thumbnails');
    
    add_theme_support('widgets');

    add_theme_support('menus');


    //lägg till widgets & sidebars
    register_sidebar( 
        [
            'name' => 'widget 1',
            'id' => 'widget1',
            'description' => 'Det här är en första widget'
        ]
    );
    
    register_sidebar( 
        [
            'name' => 'widget footer2',
            'id' => 'widget-footer2',
            'description' => 'Det här är en footer2 widget'
        ]
    );

    register_sidebar( 
        [
            'name' => 'widget 3',
            'id' => 'widget3',
            'description' => 'Det här är en tredje widget'
        ]
    );
    
    register_sidebar( 
        [
            'name' => 'widget footer1',
            'id' => 'widget-footer1',
            'description' => 'Det här är en footer1 widget'
        ]
    );

    register_sidebar( 
        [
            'name' => 'widget sidebar',
            'id' => 'widget-sidebar',
            'description' => 'Det här är en sidebar widget'
        ]
    );

    //Lägg till menyer
    add_action('after_setup_theme', 'register_menu');

    function register_menu() {
        register_nav_menu('headermenu', 'headermenu');
        register_nav_menu('footermeny', 'footermeny');
        register_nav_menu('sidomeny', 'sidomeny');
    }

    function my_excerpt_length($length){
        return 10;
        }
        add_filter('excerpt_length', 'my_excerpt_length');

    
    ?>
    <?php get_template_part( $undersida4 ); ?>
