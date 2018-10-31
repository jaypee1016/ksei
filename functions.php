<?php

function attachment_count() {
global $post;
    //Get all attachments
    $attachments = get_posts( array(
        'post_type' => 'attachment',
        'posts_per_page' => -1
    ) );

    $att_count = 0;
    if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
            // Check for the post type based on individual attachment's parent
            if ( 'gallery' == get_post_type($attachment->post_parent) ) {
                $att_count = $att_count + 1;
            }
        }
        echo $att_count;
    }
}


// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'ppg', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

// Get the page number
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' | ' . __( 'Page ' , 'ppg') . get_query_var('paged');
    }
} // end get_page_number

// Register widgetized areas
function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
    'name' => 'Primary Widget Area',
    'id' => 'primary_widget_area',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s"><div class="paperclip"></div>',
    'after_widget' => "</aside>",
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
   register_sidebar( array (
    'name' => 'Secondary Widget Area',
    'id' => 'sidebar_widget_area',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s"><div class="paperclip"></div>',
    'after_widget' => "</aside>",
  ) );
     register_sidebar( array (
    'name' => 'Tertiary Widget',
    'id' => 'sidebar_weather',
  ) );
       register_sidebar( array (
    'name' => 'Latest Post',
    'id' => 'latest_post',
  ) );
         register_sidebar( array (
    'name' => 'Latest Comment',
    'id' => 'latest_comment',
  ) );
} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );

$preset_widgets = array (
    'primary_widget_area'  => array( 'search', 'pages', 'categories', 'archives' )
);
if ( isset( $_GET['activated'] ) ) {
    update_option( 'sidebars_widgets', $preset_widgets );
}

// update_option( 'sidebars_widgets', NULL );

// Check for static widgets in widget-ready areas
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
 
  $widgetcolums = wp_get_sidebars_widgets();
 
  if ($widgetcolums[$index]) return true;
 
    return false;
} // end is_sidebar_active

function change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
		$query->query_vars['posts_per_page'] = 5; // Change 10 to the number of posts you would like to show
 
	return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter

add_filter('widget_text', 'do_shortcode');


//Change excerpt filter
function custom_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//remove [..] from excerpt
function trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');

//wp-prettyphoto add rel on photo links

function sant_prettyadd ($content) {
	$content = preg_replace("/<a/","<a rel=\"prettyPhoto[pp_gal]\"",$content,1);
	return $content;
}
add_filter( 'wp_get_attachment_link', 'sant_prettyadd');

//------ for pagination with page/post/page/2/ type - erick april 18 2012

add_filter('redirect_canonical','pif_disable_redirect_canonical');

function pif_disable_redirect_canonical($redirect_url) {
if (is_singular('gallery')) $redirect_url = false;
return $redirect_url;
}

function get_excerpt_by_id($post_id){
$the_post = get_post($post_id); //Gets post ID
$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
$excerpt_length = 7; //Sets excerpt length by word count
$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
$words = explode(' ', $the_excerpt, $excerpt_length + 1);
if(count($words) > $excerpt_length) :
array_pop($words);
array_push($words, ' ');
$the_excerpt = implode(' ', $words);
endif;
$the_excerpt = '<p>' . $the_excerpt . '</p>';
return $the_excerpt;
}

function postimage($post_id, $size=medium) {
	if ( $images = get_children(array(
		'post_parent' => $post_id,
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, array(800,500) );
			echo $attachmentimage;
		}
	} else {
		echo "No Image";
	}
}

function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

function get_permalink_by_title( $title ) {

    // Initialize the permalink value
    $permalink = null;

    // Try to get the page by the incoming title
    $page = get_page_by_title( strtolower( $title ) );

    // If the page exists, then let's get its permalink
    if( null != $page ) {
        $permalink = get_permalink( $page->ID );
    } // end if

    return $permalink;

} // end theme_get_permalink_by_title

?>