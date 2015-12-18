<?php
/**
 * Template Name: Template: Testimonials
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

				<?php if( get_field('submenu') ) { ?>
					<div id="sidebar-background" class="hidden-xs hidden-sm col-md-3"></div>				
					<?php include 'includes/menu-sidebar.php'; ?>
				<?php } ?>

				<div class="col-md-9">
					<div class="row">
						<div class="<?php if( get_field('sidebar') ) { ?>col-md-8<?php } else { ?>col-md-12<?php } ?>">
							<div class="content">
							
								
								<?php the_content(); ?>
								<hr>
								<?php if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); ?>
									<div class="testimonial">
										<div class="row">

											<?php if( get_sub_field('image') ): ?>								
												<div class="col-xs-4">
													<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('name');?>" class="img-responsive">
												</div>
											<?php endif; ?>

											<div class="<?php if( get_sub_field('image') ): ?>col-xs-8 <?php else : ?>col-xs-12<?php endif; ?>">
												<?php if( get_sub_field('name') ): ?>
													<h4 class="name"><?php the_sub_field('name');?></h4>
													<?php if( get_sub_field('byline') ): ?>
													<p class="byline">- <?php the_sub_field('byline');?></p>
													<?php endif; ?>
												<?php endif; ?>
												<?php if( get_sub_field('description') ): ?>
													<p class="description">
														<span class="quotemark">»</span>
															<?php the_sub_field('description');?>
														<span class="quotemark">«</span>
													</p>
												<?php endif; ?>
											</div>
										</div>
									</div>									
								<?php endwhile; else : endif; ?>
								
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