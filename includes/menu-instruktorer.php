<?php 
/**
 * Description: Module - Instructers Menu
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 

 <?php $sports_nav = array(
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
 ); ?>

	<?php wp_nav_menu( $sports_nav ); ?>
