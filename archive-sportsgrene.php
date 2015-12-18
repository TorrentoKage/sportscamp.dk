<?php
/**
 * Description: Archive template
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>

	<?php if( get_field('featured_image', 124) ): ?>
		<section class="page-header">
			<div class="photo" style="background: #fff url('<?php the_field('featured_image', 124); ?>');background-position: center <?php the_field('vposition', 124); ?>%;"></div>
		</section>
	<?php endif; ?>
	
 	<?php include 'includes/module-breadcrumbs.php';?>
 	
 	<div class="subpage">
	 	<div id="subpage-background"></div>
	 	<div class="container">
			<div class="row">
				<div id="sidebar-background" class="col-md-3"></div>
				
				<?php include 'includes/menu-sports.php'; ?>
				
				<div class="col-md-9">
					<div class="content">
						<div class="row">
							<div class="col-md-12">
								<h1><?php the_field('title', 124); ?></h1>
								<p class="lead"><?php the_field('intro', 124); ?></p>
							</div>
						</div>
						<div class="row">
						    <div class="list">
					        	<?php $posts = query_posts($query_string . '&orderby=title&order=asc'); ?>

								<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
										<?php include 'includes/module-sports-list-item.php' ?>
									<?php endwhile; ?>		
								<?php endif; ?>
							</div>
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