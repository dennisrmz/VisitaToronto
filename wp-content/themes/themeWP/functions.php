<?php 
    function theme_scripts(){
        // agregar hojas de estilos
    
        wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
        wp_enqueue_style('bxsliderCSS', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.12');
        wp_enqueue_style('slicknavCSS','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css',array('normalize'),'1.0.10');
    
        wp_enqueue_script('bxsliderJS', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2.12',true);

        wp_enqueue_script('myScriptJS', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0',true);
        wp_enqueue_style('googleFonts','https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&display=swap',array(),'1.0.0');
    
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    
    
        //Scripts
        wp_enqueue_script( 'slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    
        // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0',true);
    }

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );


    register_nav_menus( array(
        'menu_principal' => __('Menu Principal', 'PlantillaWP')
    ) );

    add_theme_support( "post-thumbnails" );
    add_image_size( "destacada", 1100, 418, true );
    add_image_size( "guia-toronto", 350, 210, true );
    add_image_size( "consejos", 720, 380, true );
    
    function theme_widgets() {

        register_sidebar( array(
            "name"          => __('Sidebar Testimoniales'),
            "id"            => 'sidebar-2',
            "description"   => 'Widgets de Testimoniales',
            "before_widget" => '<aside id="%1$s" class="widget %2$s">',
            "after_widget"  => '</aside>',
            "before_title"  => '<h3 class="widget-title">',
            "after_title"   => '</h3>'
        ) );

        register_sidebar( array(
            "name"          => __('Imaginas Pagina Principal'),
            "id"            => 'front-page',
            "description"   => 'Widgets de Testimoniales',
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget"  => '</div>',
            "before_title"  => '<h3 class="widget-title">',
            "after_title"   => '</h3>'
        ) );

    }

    add_action( 'widgets_init', 'theme_widgets' );

    add_filter( 'show_admin_bar', '__return_false' );