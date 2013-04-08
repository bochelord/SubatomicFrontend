<?php
/* 
Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Adding Translation Option
load_theme_textdomain( 'bonestheme', TEMPLATEPATH.'/languages' );
$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable($locale_file) ) require_once($locale_file);

// Cleaning up the Wordpress Head
function bones_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );                    
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );                          
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );                               
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );                       
	// index link
	remove_action( 'wp_head', 'index_rel_link' );                         
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); 
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	if (!is_admin()) {
		wp_deregister_script('jquery');                                   // De-Register jQuery
		wp_register_script('jquery', '', '', '', true);                   // It's already in the Header
	}	
}
	// launching operation cleanup
	add_action('init', 'bones_head_cleanup');
	// remove WP version from RSS
	function bones_rss_version() { return ''; }
	add_filter('the_generator', 'bones_rss_version');
	
// loading jquery reply elements on single pages automatically
function bones_queue_js(){ if (!is_admin()){ if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script( 'comment-reply' ); }
}
	// reply on comments script
	add_action('wp_print_scripts', 'bones_queue_js');

// Fixing the Read More in the Excerpts
// This removes the annoying […] to a Read More link
function bones_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '... <div class="read-more"><a href="'. get_permalink($post->ID) . '" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a></div>';
}
add_filter('excerpt_more', 'bones_excerpt_more');
	
// Adding WP 3+ Functions & Theme Support
function bones_theme_support() {
	add_theme_support('post-thumbnails');      // wp thumbnails (sizes handled in functions.php)
	set_post_thumbnail_size(125, 125, true);   // default thumb size
	add_theme_support('automatic-feed-links'); // rss thingy
	add_theme_support( 'menus' );            // wp menus
	register_nav_menus(                      // wp3+ menus
		array( 
			'main_nav' => 'The Main Menu',   // main nav in header
			'footer_links' => 'Footer Links' // secondary nav in footer
		)
	);	
}

	// launching this stuff after theme setup
	add_action('after_setup_theme','bones_theme_support');	
	// adding sidebars to Wordpress (these are created in functions.php)
	add_action( 'widgets_init', 'bones_register_sidebars' );
	// adding the bones search form (created in functions.php)
	add_filter( 'get_search_form', 'bones_wpsearch' );
	

 
function bones_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu( 
    	array( 
    		'menu' => 'main_nav', /* menu name */
    		'theme_location' => 'main_nav', /* where in the theme it's assigned */
    		'container_class' => 'menu clearfix', /* container class */
    		'fallback_cb' => 'bones_main_nav_fallback' /* menu fallback */
    	)
    );
}

function bones_footer_links() { 
	// display the wp3 menu if available
    wp_nav_menu(
    	array(
    		'menu' => 'footer_links', /* menu name */
    		'theme_location' => 'footer_links', /* where in the theme it's assigned */
    		'container_class' => 'footer-links clearfix', /* container class */
    		'fallback_cb' => 'bones_footer_links_fallback' /* menu fallback */
    	)
	);
}
 
// this is the fallback for header menu
function bones_main_nav_fallback() { 
	wp_page_menu( 'show_home=Home&menu_class=menu' ); 
}

// this is the fallback for footer menu
function bones_footer_links_fallback() { 
	/* you can put a default here if you like */ 
}


/****************** PLUGINS & EXTRA FEATURES **************************/

// Numeric Page Navi (built into the theme by default)
function page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	echo $before.'<nav class="page-navigation"><ol class="bones_page_navi clearfix">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = "First";
		echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
	}
	echo '<li class="bpn-prev-link">';
	previous_posts_link('<<');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="bpn-current">'.$i.'</li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="bpn-next-link">';
	next_posts_link('>>');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = "Last";
		echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
	}
	echo '</ol></nav>'.$after."";
}

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


	

?>