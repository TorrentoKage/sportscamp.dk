<?php
/**
 * Description: Comments template
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */ ?>

 	<?php if ( have_comments() ) : ?>

	  	<p class="h3"><?php comments_number( 'Ingen kommentarer', '1 kommentar', '% kommentarer' ); ?> til indlægget</p>

	    <?php $args = array(
			'walker'            => null,
			'max_depth'         => '10',
			'style'             => 'ul',
			'callback'          => null,
			'end-callback'      => null,
			'type'              => 'all',
			'reply_text'        => 'Skriv et svar',
			'page'              => '',
			'per_page'          => '',
			'avatar_size'       => 70,
			'reverse_top_level' => null,
			'reverse_children'  => '',
			'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
			'short_ping'        => false,   // @since 3.6
		    'echo'              => true     // boolean, default is true
		); ?>

		<?php wp_list_comments( $args, $comments ); ?> 
	  
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<?php previous_comments_link( '&larr; Ældre kommentarer'); ?>
		    <?php next_comments_link( 'Nyere kommentarer &rarr;'); ?>

		<?php endif; ?>

	<?php endif; ?>

	<?php if ( comments_open() ) { comment_form(); } ?>
	<?php wp_enqueue_script( 'comment-reply' );?>
	