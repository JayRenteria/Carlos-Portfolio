<?php

// specify the site url and the home url
update_option('siteurl','http://dev.carlosmindacochea.com');
update_option('home','http://dev.carlosmindacochea.com');

add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus(
		array(
			'top_menu'	=> __('Top Menu', 'aandbae')
		)
	);
}

/**
 * load the js files
 */
function aandbae_load_js() {

	// old browsers compatibility
	global $wp_scripts;
	wp_register_script('html5_shiv', '/js/html5shiv.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

	wp_register_script('bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3', true);
	wp_enqueue_script('bootstrap_js');

	// validation plugin
	wp_enqueue_script('jquery-form', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js', array('jquery'), '', false);
	wp_enqueue_script('jquery-validation', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js', array('jquery'), '', false);
	wp_enqueue_script('jquery-validation-additional', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.min.js', array('jquery'), '', false);

	// custom js files
	wp_register_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
	wp_enqueue_script('main_js');
	wp_register_script('validation_js', get_template_directory_uri() . '/js/validation.js', array('jquery'), '', true);
	wp_enqueue_script('validation_js');
}
add_action('wp_enqueue_scripts', 'aandbae_load_js');

/**
 * load the fonts
 */
function aandbae_load_fonts() {
	// h1 font (example)
//	wp_enqueue_style('source_code_pro', 'http://fonts.googleapis.com/css?family=Source+Code+Pro:500');
}
//add_action('wp_print_styles', 'aandbae_load_fonts');

/**
 * load the css files
 */
function aandbae_load_css() {
	wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
	wp_enqueue_style('vanilla_css', get_template_directory_uri() . '/css/vanilla.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'aandbae_load_css');

/**
 * remove the admin Word Press bar
 */
 function aandbae_remove_admin_bar() {
   if (!current_user_can('administrator') && !is_admin()) {
     show_admin_bar(false);
   }
 }
 add_action('after_setup_theme', 'aandbae_remove_admin_bar');
//add_filter( 'show_admin_bar', '__return_false' );




/*
 * These functions allow to split p tags from
 *  -the content
 *  -the excerpt
 *  -the field
 */
function the_content_without_filters( $the_content=null ) {
	remove_filter('the_content', 'wpautop');
	if( $the_content ) {
		the_content( $the_content );
	} else {
		the_content();
	}
	add_filter('the_content', 'wpautop');
}

function the_excerpt_without_filters( $the_excerpt=null ) {
	remove_filter('the_excerpt', 'wpautop');
	if( $the_excerpt ) {
		the_excerpt( $the_excerpt ) ;
	} else {
		the_excerpt();
	}
	add_filter('the_excerpt', 'wpautop');
}

function the_field_without_filters( $the_field=null ) {
	remove_filter('acf_the_content', 'wpautop');
	if( $the_field ) {
		the_field( $the_field );
	} else {
		the_field();
	}
	add_filter('acf_the_content', 'wpautop');
}


/*
 * Widget creation
 */
function aandbae_create_widget( $name, $id, $before_widget, $after_widget, $before_title, $after_title, $description ) {

	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => __( $description ),
		'before_widget' => $before_widget,
		'after_widget'  => $after_widget,
		'before_title'  => $before_title,
		'after_title'   => $after_title
	);

	register_sidebar( $args );
}
// change top picture
aandbae_create_widget( 'Top Picture', 'top-pic', '', '', '', '', 'Widget for changing Top picture.');

// change bio picture
aandbae_create_widget( 'Bio Picture', 'bio-pic', '', '', '', '', 'Widget for changing Bio picture.');

// change bio text
aandbae_create_widget( 'Bio Text', 'bio-text', '', '', '', '', 'Widget for changing Bio text.');

?>