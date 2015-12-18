<?php 
/**
 * Description: Module - Camps list item
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 

<div class="col-xs-12 col-sm-6 col-md-4 list-item">
	<div class="list-container">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="photo" style="background: #efefef url('<?php the_field('featured_image'); ?>');">
			</div>
		</a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item">
		  	<h2 class="h4 title"><?php the_title(); ?></h2>
		  	<p><?php the_field('list_description' ); ?></p>
		 </a>
	</div>
</div>