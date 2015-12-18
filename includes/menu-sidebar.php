<?php 
/**
 * Description: Module - Sports Menu
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 


<?php if(get_field('choose_your_menu') == "standard") { 
	 $standard_nav = array(
		'theme_location'  => '',
		'menu'            => 'Standard Menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'col-md-3 ',
		'menu_id'         => 'nav-sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '' 
	 );
	 wp_nav_menu( $standard_nav );
} ?>


<?php if(get_field('choose_your_menu') == "gallery") { 
	 $standard_nav = array(
		'theme_location'  => '',
		'menu'            => 'Galleri Menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'col-md-3',
		'menu_id'         => 'nav-sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '' 
	 );
	 wp_nav_menu( $standard_nav );
} ?>

<?php if(get_field('choose_your_menu') == "practical") { 
	 $standard_nav = array(
		'theme_location'  => '',
		'menu'            => 'Praktisk Menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'col-md-3',
		'menu_id'         => 'nav-sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '' 
	 );
	 wp_nav_menu( $standard_nav );
} ?>


<?php if(get_field('choose_your_menu') == "signup") { 
	 $standard_nav = array(
		'theme_location'  => '',
		'menu'            => 'Tilmelding Menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'col-md-3',
		'menu_id'         => 'nav-sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '' 
	 );
	 wp_nav_menu( $standard_nav );
} ?>

<?php if(get_field('choose_your_menu') == "instructors") { 
	 $standard_nav = array(
		'theme_location'  => '',
		'menu'            => 'Instruktører Menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'col-md-3',
		'menu_id'         => 'nav-sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '' 
	 );
	 wp_nav_menu( $standard_nav );
} ?>
