<?php
add_action('after_setup_theme','reg_custom_menu');
function reg_custom_menu() {
    register_nav_menus(array
    (
        'headermenu'=>__( 'first menu','myfirstmenu' ) ,
        'secondary'=>__( 'second menu','mysecondmenu' ) 
    
    ));
}

function logo_custom_logo() {
	$defaults = array(
		'height'               => 100,
		'width'                => 100,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
		}
	add_action( 'after_setup_theme', 'logo_custom_logo' );



function menu_li_classes ( $classes, $item, $args, $depth ){
		$classes[] = 'menu-li';
		return $classes;
		}
add_filter ( 'nav_menu_css_class', 'menu_li_classes', 10, 4 );
add_action('after_setup_theme','post_func');
//add_theme_support( 'post-thumbnails' );



 
function post_func(){
	add_theme_support('post-thumbnails');
	register_post_type("course", [
        "labels" => [
            "name" => __("Our Courses", "skill bridge"),
            "singular_name" => __("Our Course", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);
	register_post_type("aboutus", [
        "labels" => [
            "name" => __("About Us", "skillbridge"),
            "singular_name" => __("About Us", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);register_post_type("pricing", [
        "labels" => [
            "name" => __("Pricing", "skillbridge"),
            "singular_name" => __("Pricing", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);
}

add_action('init', 'post_func');





?>