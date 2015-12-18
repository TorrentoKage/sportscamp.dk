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
					
					Facebook Feed

					<?php 

						$fbfeed_path = 'http://www.sportscamp.dk/wp-content/themes/sportscamp/lib/fbfeed/'; 
						include $fbfeed_path . 'http://www.sportscamp.dk/wp-content/themes/sportscamp/lib/fbfeed/fbfeed-settings.php'; 
	                    fbFeed($settings); 

                    ?>

                    Facebook Feed
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

	
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://www.sportscamp.dk/wp-content/themes/sportscamp/lib/fbfeed/core/js/cff.js"></script>

<?php get_footer(); ?>