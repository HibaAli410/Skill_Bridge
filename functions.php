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
function dynamicPostUrlButton( $addToUrl = []) {
    $dynButton = '<a class="button" href="'.get_permalink().$addToUrl['dynb_link'].'">'.$addToUrl['dynb_text'].'</a>';
    return $dynButton;
}

add_shortcode('dynamic_post_url_button', 'dynamicPostUrlButton');


 /*function custom_button()

		{
		echo " get_submit_button( $text, $type, $name, $wrap, $other_attributes ) ";
		}

add_action( 'after_setup_theme', 'custom_button' ); 
   function custom_button( $atts, $content = null ) {
   
    // shortcode attributes
    extract( shortcode_atts( array(
        'url'    => '',
        'title'  => '',
        'target' => '',
        'text'   => '',
    ), $atts ) );

}*/
//add_shortcode( 'custombutton', 'custom_button' ); 
/*function custom_button() {
   
	echo "<button></button>";
 
}
add_shortcode( 'custombutton', 'custom_button' );*/

?>