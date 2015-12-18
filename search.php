<?php
/**
 * Description: Search page
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

 	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-xs-8">
				<br><br><br>
				<h1>Din søgning:</h1>
				<hr>
			</div>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="col-md-offset-2 col-xs-8">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<p class="lead"><?php the_excerpt(); ?></p>
					</div>

				<?php endwhile; ?>		
				
				<div class="pull-left">
					<?php next_posts_link( '<i class="fa fa-long-arrow-left"></i> Ældre indlæg' ); ?>
				</div>

				<div class="pull-right">
					<?php previous_posts_link( 'Nyere indlæg <i class="fa fa-long-arrow-right"></i>' ); ?>
				</div>

				<div class="col-md-12">
					<br><br><br>
				</div>

			<?php endif; ?>
							
		</div>
	</div>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>