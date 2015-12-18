<?php 

	// Clean Up WordPress Headers
	remove_action( 'wp_head', 'feed_links' );
	remove_action( 'wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'index_rel_link');
	remove_action( 'wp_head', 'parent_post_rel_link');
	remove_action( 'wp_head', 'start_post_rel_link');
	remove_action( 'wp_head', 'adjacent_posts_rel_link');
	remove_action( 'wp_head', 'wp_generator');
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	
	// Removes WordPress versions from RSS etc.
	function remove_wp_versino() {return '';}
	add_filter('the_generator', 'remove_wp_versino');

	// Add theme support for menus
	add_theme_support( 'menus' ); 
	function wp_nav_menu_attributes_filter($var) {
		return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
	}
	add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
	add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);

	// Removes WordPress SEO By Yoast Comments for more streamlined code
	add_action('get_header', 'rmyoast_ob_start');
	add_action('wp_head', 'rmyoast_ob_end_flush', 100);

	function rmyoast_ob_start() {ob_start('remove_yoast');}
	function rmyoast_ob_end_flush() {ob_end_flush();}
	function remove_yoast($output) { if (defined('WPSEO_VERSION')) {
	        $output = str_ireplace('<!-- This site is optimized with the Yoast WordPress SEO plugin v' . WPSEO_VERSION . ' - https://yoast.com/wordpress/plugins/seo/ -->', '', $output);
	        $output = str_ireplace('<!-- / Yoast WordPress SEO plugin. -->', '', $output); } 
	return $output;}

	// Moves Gravity Forms to the footer
	add_filter("gform_init_scripts_footer", "init_scripts");
	function init_scripts() {
		return true;
	}
	// Gravity Forms remove scripts (Disables AJAX)
	add_action("gform_enqueue_scripts", "deregister_scripts");
	function deregister_scripts(){
		wp_deregister_script("jquery"); 
	}

	/// Set the post revisions unless the constant was set in wp-config.php
	if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);

	// Add support for Bootstrap 3 in WordPress comments
	add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
	function bootstrap3_comment_form_fields( $fields ) {
	    $commenter = wp_get_current_commenter();
	    $req      = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );
	    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	    $fields   =  array(
	        'author' => '<div class="form-group comment-form-author required"><input required class="form-control" id="author" name="author" type="text" placeholder="Dit navn" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'email'  => '<div class="form-group comment-form-email required"><input required class="form-control" id="email" placeholder="Din e-mail (bliver ikke vist)" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'url'    => '<div class="form-group comment-form-url"><input class="form-control" id="url" placeholder="Evt. Website" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
	    );
	    
	    return $fields;
	}
	// Add support for Bootstrap 3 in WordPress comments
	add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
	function bootstrap3_comment_form( $args ) {
	    $args['comment_field'] = '<div class="form-group comment-form-comment required">
	            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" required placeholder="Skriv din kommentar"></textarea>
	        </div>';
	    return $args;
	}
	// Add support for Bootstrap 3 in WordPress comments
	add_action('comment_form', 'bootstrap3_comment_button' );
	function bootstrap3_comment_button() {
	    echo '<button class="btn btn-lg btn-default" type="submit">Send kommentar</button>';
	} 

	// Add element class for previous/next post links
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');
	function posts_link_attributes() {
	    return 'class="btn btn-default"';
	}
	
	// Theme support for HTML5 searchform
	add_theme_support( 'html5', array( 'search-form' ) );

	// Custom excerpt length
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	

	// Our custom post type function
	function create_posttype() {
		register_post_type( 'Camps',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'Camps' ),
					'singular_name' => __( 'Camp' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'camps'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);
			
		register_post_type( 'Sportsgrene',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'Sportsgrene' ),
					'singular_name' => __( 'Sportsgren' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'sportsgrene'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);
	}	
	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );


	// Cleans WordPress Backend
	add_action('admin_head', 'hidemenus');
	function hidemenus() {
	    global $current_user; get_currentuserinfo();
	    if($current_user->user_login != 'mikkeltschentscher') { ?>
	        <style>
	           #menu-plugins, 
	           #menu-tools,
	           #toplevel_page_cff-top,
	           #toplevel_page_wpseo_dashboard,
	           #toplevel_page_edit-post_type-acf,
	           #toplevel_page_w3tc_dashboard {display:none!important;}
	        </style>
	    <?php }
	}

?>