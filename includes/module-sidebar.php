<?php 
/**
 * Description: Module: Sidebar
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */ 
 ?>


<?php if( have_rows('dynamicsidebar') ): ?>
	<div class="row">
		<?php while ( have_rows('dynamicsidebar') ) : the_row(); ?>

		<?php if( get_row_layout() == 'primary_box' ): ?>
			<div class="col-sm-6 col-md-12">
				<div class="card card-info">
					<div class="content">
						<?php the_sub_field('title'); ?>
					</div>
					<a href="<?php the_sub_field('button_url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-info"><?php the_sub_field('button_text'); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
	    <?php elseif( get_row_layout() == 'image_box' ):  ?>
			<div class="col-sm-6 col-md-12">
				<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="card card-testimonial" style="background: linear-gradient( to bottom, rgba(0, 0, 0, 0), rgb(2, 56, 117) ), url('<?php the_sub_field('image'); ?>');">
					<div class="content">
						<?php the_sub_field('title'); ?> <i class="fa fa-chevron-right"></i>
					</div>
				</a>
			</div>
	    <?php elseif( get_row_layout() == 'secondary_box' ):  ?>
			<div class="col-sm-6 col-md-12">
				<div class="card card-default">
					<div class="content">
						<?php the_sub_field('title'); ?>
					</div>
					<a href="<?php the_sub_field('button_url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-info"><?php the_sub_field('button_text'); ?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
	    <?php elseif( get_row_layout() == 'text_box' ):  ?>
			<div class="col-sm-6 col-md-12">
				<div class="card card-text">
					<div class="content">
						<?php the_sub_field('text_area'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
	</div>
<?php else : ?>

	<?php if( have_rows('standardsidebar', options) ): ?>
		<div class="row">
			<?php while ( have_rows('standardsidebar', options) ) : the_row(); ?>

			<?php if( get_row_layout() == 'primary_box' ): ?>
				<div class="col-sm-6 col-md-12">
					<div class="card card-info">
						<div class="content">
							<?php the_sub_field('title'); ?>
						</div>
						<a href="<?php the_sub_field('button_url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-info"><?php the_sub_field('button_text'); ?> <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
		    <?php elseif( get_row_layout() == 'image_box' ):  ?>
				<div class="col-sm-6 col-md-12">
					<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('title'); ?>" class="card card-testimonial" style="background: linear-gradient( to bottom, rgba(0, 0, 0, 0), rgb(2, 56, 117) ), url('<?php the_sub_field('image'); ?>');">
						<div class="content">
							<?php the_sub_field('title'); ?> <i class="fa fa-chevron-right"></i>
						</div>
					</a>
				</div>
		    <?php elseif( get_row_layout() == 'secondary_box' ):  ?>
				<div class="col-sm-6 col-md-12">
					<div class="card card-default">
						<div class="content">
							<?php the_sub_field('title'); ?>
						</div>
						<a href="<?php the_sub_field('button_url'); ?>" title="<?php the_sub_field('title'); ?>" class="btn btn-block btn-info"><?php the_sub_field('button_text'); ?> <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
		    <?php elseif( get_row_layout() == 'text_box' ):  ?>
				<div class="col-sm-6 col-md-12">
					<div class="card card-text">
						<div class="content">
							<?php the_sub_field('text_area'); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>

<?php endif; ?>

