<?php
/**
 * Template Name: Template: Instructors
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>
 	<?php include 'includes/module-page-header.php'; ?>
 	<?php include 'includes/module-breadcrumbs.php';?>

 	<div class="subpage">
	 	<div id="subpage-background"></div>
	 	<div class="container">
			<div class="row">
				<div id="sidebar-background" class="hidden-xs hidden-sm col-md-3"></div>				
				<?php include 'includes/menu-sidebar.php'; ?>
				<div class="col-md-9">
					<div class="row">
						<div class="<?php if( get_field('sidebar') ) { ?>col-md-8<?php } else { ?>col-md-12<?php } ?>">
							<div class="content">
								<?php the_content(); ?>
								<div class="row instructors">
									<?php if( have_rows('instructors') ):  while ( have_rows('instructors') ) : the_row(); ?>
										<div class="col-md-6">
											<div class="instructor-image" style="background: url('<?php the_sub_field('image'); ?>');"></div>
											<h3><?php the_sub_field('name'); ?></h3>
											<p class="lead"><?php the_sub_field('intro'); ?></p>
											<p class="description"><?php the_sub_field('description'); ?></p>
										</div>
									<?php endwhile; else : endif; ?>
								</div>
							</div>
						</div>
						<?php if( get_field('sidebar') ) { ?> 
							<div class="col-md-4">
								<?php include 'includes/module-sidebar.php'; ?>
							</div>
						<?php } ?>
					</div>				
				</div>	
			</div>
		</div>
	</div>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>