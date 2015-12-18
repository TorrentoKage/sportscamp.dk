<?php 
/**
 * Description: Module - Sports list item
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 

<div class="col-xs-12 col-sm-6 col-md-6 list-item sports-item">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<div class="photo" style="background: #efefef url('<?php the_field('featured_image'); ?>');">
		</div>
	</a>
	<div class="item">
	  	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	  		<h2 class="title"><?php the_title(); ?></h2>
	  	</a>
	 </div>
</div>