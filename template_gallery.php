<?php
/**
 * Template Name: Template: Gallery
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>
 	<?php include 'includes/module-breadcrumbs.php';?>

 	<div class="subpage">
	 	<div id="subpage-background"></div>
	 	<div class="container">
			<div class="row">
				<div id="sidebar-background" class="col-md-3"></div>
				<?php include 'includes/menu-sidebar.php'; ?>
				<div class="col-md-9">
					<div class="content">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<hr>
						<div class="row sm-gutter list gallery">
							<?php if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row(); ?>
								<?php include 'includes/module-gallery-list-item.php' ?>
							<?php endwhile; else : endif;?>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>