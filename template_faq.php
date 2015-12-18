<?php
/**
 * Template Name: Template: FAQ
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
						<div class="col-md-8">
							<div class="content">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<hr>
									<?php if( have_rows('faq') ):  $counter = 1;  ?>
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										  <?php while ( have_rows('faq') ) : the_row(); ?>
										  <div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="heading_generel_<?php echo $counter; ?>">
										      <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_generel_<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse_generel_<?php echo $counter; ?>"><?php the_sub_field('title'); ?></a></h4>
										    </div>
										    <div id="collapse_generel_<?php echo $counter; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_generel_<?php echo $counter;  ?>">
										      <div class="panel-body"><?php the_sub_field('description'); ?></div>
										    </div>
										  </div>
										  <?php $counter++; endwhile; ?>
										</div>
									<?php else : endif; ?>
								
									<?php if( get_sub_field('faq_subtext') ): ?>
										<hr>
										<p class="lead"><?php the_sub_field('faq_subtext'); ?></p>
									<?php endif; ?>
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