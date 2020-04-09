<?php


function marketflux_files() {
  //This is the main style sheet
  wp_enqueue_style('marketflux_main_files', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
  /*wp_enqueue_script('marketflux_main_script', get_theme_file_uri('/js/cycle2.js'), NULL, '1.0', true);*/
  wp_enqueue_script('marketflux_app_script', get_theme_file_uri('/script.js'));

  // Google Fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );
}
add_action ( 'wp_enqueue_scripts', 'marketflux_files' );


/*
	==========================================
	 I
	==========================================
*/
function marketflux_config(){
  add_theme_support('menus');
  register_nav_menu('marketflux_main_menu', 'Marketflux Main Menu');
  register_nav_menu('categories', 'CATEGORIES');

  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'        => 10,
      'min_rows'            => 5,
      'max_rows'            => 10,
      'default_columns'     => 1,
      'min_columns'         => 1,
      'max_columns'         => 4,
    )
  ) );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  //Slider Image Size
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'marketflux-slider', 1200, 350, array( 'center', 'center' ) );

  //content device-width

    if ( ! isset( $content_width ) ) {
  	$content_width = 600;
  }
}
add_action ( 'after_setup_theme', 'marketflux_config', 0 );



/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'marketflux_woocommerce_header_add_to_cart_fragment' );

function marketflux_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

/*
	==========================================
	 Include Walker file
	==========================================
*/
require get_template_directory() . '/inc/walker.php';

/*
	==========================================
	 Include customizer file
	==========================================
*/
require get_template_directory() . '/inc/customizer.php';
/*
	==========================================
	 Include woocommerce_hook file
	==========================================
*/

if( class_exists( 'woocommerce' )){
  require get_template_directory() . '/inc/woocommerce_hook.php';
}
