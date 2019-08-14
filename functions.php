<?php

/*
  ======================================
  Include scripts
  ======================================
*/

function ana_script_enqueue() {

    //css
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	  wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/ana_theme.css', array(), '1.0.0', 'all' );

    //java script
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.3', true );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/ana_theme.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'ana_script_enqueue' );

/*
  ======================================
  Activate menus
  ======================================
*/

function ana_theme_setup() {

    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Primary Header Navigation' );

}

add_action( 'init', 'ana_theme_setup' );

/*
  ======================================
  Theme support function
  ======================================
*/

add_theme_support( 'title-tag' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ));

/*
  ======================================
  Sidebar function
  ======================================
*/

function ana_widget_setup() {

    register_sidebar(
      array(
          'name'          => 'Sidebar',
          'id'            => 'sidebar-1',
          'class'         => 'custom',
          'description'   => 'Standard Sidebar',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			    'after_widget'  => '</aside>',
			    'before_title'  => '<p class="widget-title">',
			    'after_title'   => '<p>',
      )
    );

}

add_action( 'widgets_init', 'ana_widget_setup' );

/*
  =================================
  Include Walker file
  =================================
*/

require get_template_directory() . '/inc/bootstrap-navwalker.php';

/*
	==========================================
	 Head function
	==========================================
*/

function yanghaizi_remove_version() {
	return '';
}
add_filter( 'the_generator', 'yanghaizi_remove_version' );

/*
	==========================================
	 Modify read more link
	==========================================
*/

function modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Read more »</a>';

}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/*
  ===================================
  Thumbnails as hyperlinks function
  ===================================
*/

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
  return $html;

}

/*
  ===================================
  Changing tag cloud parameters
  ===================================
*/

function new_widget_tag_cloud_args($args) {

  $my_args = array(
    'smallest'  => 10,
    'largest'   => 10,
    'number'    => 30,
    'format'    => 'list',
    'orderby'   =>'count',
    'order'     =>'DESC'
   );
  $args = wp_parse_args( $args, $my_args );
  return $args;

}

add_filter('widget_tag_cloud_args','new_widget_tag_cloud_args');

/*
  ===================================
  Responsive videos
  ===================================
*/

function wrap_embed_with_div($html, $url, $attr) {

	return "<div class=\"responsive-container\">".$html."</div>";

}

add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);

/*
  ===================================
  Responsive images and captions
  ===================================
*/

function my_img_caption_shortcode_width($width, $atts, $content) {
  return 0;
}

add_filter('img_caption_shortcode_width', 'my_img_caption_shortcode_width', 10, 3);

/*
  ===================================
  Featered item size
  ===================================
*/

/*set_post_thumbnail_size( 750, 450, true );*/
/*add_image_size( 'search-thumb' , 300, 0, true );*/

/*
  ===================================
  Setting search query post types
  ===================================
*/

function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}

add_filter('pre_get_posts','SearchFilter');

/*
  ===================================
  Adding logo before menu items
  ===================================
*/

add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);

function add_new_menu_item( $nav, $args ) {
    if( $args->theme_location == 'primary' )
    $newmenuitem = "<a href='http://localhost/yanghaizi/'><li id='menu-logo'><img src='http://localhost/yanghaizi/wp-content/themes/ana_theme/img/icon1.png' alt='' width='25'></li></a>";
    $nav = $newmenuitem.$nav;
    return $nav;
}
