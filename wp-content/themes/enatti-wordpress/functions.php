<?php
function load_stylesheets()
{
    wp_register_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css' ,array(),1,'all');
    wp_enqueue_style( 'bootstrap_css');

    wp_register_style('slicknav',get_template_directory_uri().'/css/slicknav.css' ,array(),1,'all');
    wp_enqueue_style( 'slicknav');

    wp_register_style('style',get_template_directory_uri().'/css/style.css' ,array(),1,'all');
    wp_enqueue_style( 'style');

    wp_register_style('animate',get_template_directory_uri().'/css/animate.css' ,array(),1,'all');
    wp_enqueue_style( 'animate');

    wp_register_style('carousel',get_template_directory_uri().'/css/owl.carousel.min.css' ,array(),1,'all');
    wp_enqueue_style( 'carousel');

    wp_register_style('styles',get_template_directory_uri().'/style.css' ,array(),1,'all');
    wp_enqueue_style( 'styles');


}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function add_jscripts()
{
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.12.4.min.js', array(), 1,1);
    wp_enqueue_script( 'jquery' );

    wp_register_script('popper', get_template_directory_uri().'/js/popper.min.js', array(), 1,1);
    wp_enqueue_script( 'popper' );

    wp_register_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array(), 1,1);
    wp_enqueue_script( 'bootstrap_js' );

    wp_register_script('slicknav', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), 1,1);
    wp_enqueue_script( 'slicknav');

    wp_register_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), 1,1);
    wp_enqueue_script( 'owl-carousel' );

    wp_register_script('aos', get_template_directory_uri().'/js/aos.js', array(), 1,1);
    wp_enqueue_script( 'aos' );

    wp_register_script('carousel-cuztm', get_template_directory_uri().'/js/carousel-cuztm.js', array(), 1,1);
    wp_enqueue_script( 'carousel-cuztm' );

    wp_register_script('wow', get_template_directory_uri().'/js/wow.js', array(), 1,1);
    wp_enqueue_script( 'wow' );

}

add_action('wp_enqueue_scripts', 'add_jscripts');


##menu support
add_theme_support('menus');

//register menu
register_nav_menus( 
    
    array(
        'top-menu'=>__('Top Menu','theme'),
    //    'footer-menu'=>__('Footer Menu','theme'),
    )
);

add_theme_support('widgets');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
	
	




	


	

?>












