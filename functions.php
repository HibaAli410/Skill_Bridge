<?php
add_action('after_setup_theme','reg_custom_menu');
function reg_custom_menu() {
    register_nav_menus(array
    (
        'headermenu'=>__( 'first menu','myfirstmenu' ) ,
        'secondary'=>__( 'second menu','mysecondmenu' ), 
        'footermenu'=>__( 'footer menu','homemenu' ), 
    
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
    register_post_type("benefits", [
        "labels" => [
            "name" => __("Our Benefits", "skill bridge"),
            "singular_name" => __("Our Benefit", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);
	register_post_type("courses", [
        "labels" => [
            "name" => __("Our Courses", "skill bridge"),
            "singular_name" => __("Our Course", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);
    register_post_type("testimonial", [
        "labels" => [
            "name" => __("Our Testimonials", "skill bridge"),
            "singular_name" => __("Our Testimonial", "skill bridge"),
        ],
        "supports" => ["title", "editor", "author", "thumbnail", "excerpt"],
        "public" => true,
        "has_archive" => true,
    ]);
	
}
add_action('init', 'post_func');

function custom_taxonomy() {
    register_taxonomy('course-tags', 'courses', array(
        'labels' => array(
          'name' => __('Course Tags'),
          'singular_name' => __('Course Tag'),
        ),
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'course-tags' ),
        "public" => true,
        "has_archive" => true,
    ));
  }
    add_action('init', 'custom_taxonomy');
    function course_instructor_taxonomy() {
        register_taxonomy('course-instructor', 'courses', array(
            'labels' => array(
              'name' => __('Course Instructors'),
              'singular_name' => __('Course Instructor'),
            ),
            'hierarchical' => false,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'course-instructor' ),
            "public" => true,
            "has_archive" => true,
        ));
      }
        add_action('init', 'course_instructor_taxonomy');
//hook into the init action and call create_book_taxonomies when it fires
?>