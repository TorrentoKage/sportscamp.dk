<?php
/**
 * Description: Single Sports
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>
	<?php if( get_field('header_type') ) { ?>
		<?php include 'includes/module-page-header.php';?>
	<?php } ?>
 	<?php include 'includes/module-breadcrumbs.php';?>
 	
 	<div class="subpage">
	 	<div id="subpage-background"></div>
	 	<div class="container">
			<div class="row">
				<div id="sidebar-background" class="col-md-3"></div>
				<?php include 'includes/menu-sports.php'; ?>
				<div class="col-md-9">
					<div class="row">

						<?php if( get_field('header_type') ) { } else { ?>
							<div class="col-md-12">
								<img src="<?php the_field('featured_image'); ?>" class="img-responsive top-image" data-action="zoom">
							</div>				    
						<?php } ?>

						<div class="col-md-8">
							<div class="content">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
						</div>

						<div class="col-md-4">
							<?php include 'includes/module-sidebar.php'; ?>
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