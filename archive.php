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
 	<?php include 'includes/module-page-header.php';?>
 	<?php include 'includes/module-breadcrumbs.php';?>

	<section class="module">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
						<h1><?php printf( single_cat_title( '', false ) ); ?></h1>
						<p class="lead"><?php echo category_description(); ?></p>
						<hr>
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">Læs hele nyheden her</a>
							<hr>
						<?php endwhile; ?>		
			
						<div class="pull-left">
							<?php next_posts_link( '<i class="fa fa-long-arrow-left"></i> Ældre indlæg' ); ?>
						</div>

						<div class="pull-right">
							<?php previous_posts_link( 'Nyere indlæg <i class="fa fa-long-arrow-right"></i>' ); ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>