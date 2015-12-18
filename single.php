<?php
/**
 * Description: Posts page
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
					<?php the_content(); ?>
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>