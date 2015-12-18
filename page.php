<?php
/**
 * Description: Standard Page template
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

	<?php if( get_field('breadcrumbs') ) { ?>
 		<?php include 'includes/module-breadcrumbs.php';?>
 	<?php } ?>	

 	<div class="subpage">
 	
	 	<?php if( get_field('submenu') ) { ?>
	 		<div id="subpage-background"></div>
	 	<?php } ?>

	 	<div class="container">
			<div class="row">
				
				<?php if( get_field('submenu') ) { ?>
					<div id="sidebar-background" class="hidden-xs hidden-sm col-md-3 hidden-print"></div>				
					<?php include 'includes/menu-sidebar.php'; ?>
				<?php } ?>

				<div class="<?php if( get_field('submenu') ) { ?>col-md-9<?php } else { ?>col-md-12<?php } ?>">
					<div class="row">
						
						<?php if( get_field('header_type') ) { } else { ?>
							<?php if( get_field('featured_image') ): ?>
								<div class="col-md-12">
									<img src="<?php the_field('featured_image'); ?>" class="img-responsive top-image" data-action="zoom">
								</div>
							<?php endif; ?>				    
						<?php } ?>

						<div class="<?php if( get_field('sidebar') ) { ?>col-md-8<?php } else { ?>col-md-12<?php } ?>">
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>

						<?php if( get_field('sidebar') ) { ?> 
							<div class="col-md-4 hidden-print">
								<?php include 'includes/module-sidebar.php'; ?>
							</div>
						<?php } ?>

					</div>
				</div>				
			</div>	
		</div>
	</div>

	<?php if( get_field('sponsers') ) { ?>
		<?php include 'includes/module-sponsors.php';?>	
	<?php } ?>

	<?php if( get_field('newsletter') ) { ?>
		<?php include 'includes/module-newsletter.php';?>
	<?php } ?>

	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>