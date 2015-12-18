<?php
/**
 * Description: 404 template
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); include 'includes/module-header.php'; ?>

	<section class="module">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h1>Fejl 404: Siden blev ikke fundet</h1>
					<p class="lead">Den side, du leder efter, er ikke tilgængelig af én af følgende årsager:</p>
					<ul>
						<li>Linket til denne side er muligvis forkert eller forældet.</li>
						<li>Du har muligvis føjet en side til dine foretrukne sider, og siden er senere blevet flyttet.</li>
					</ul> 
					<br>
					<a href="<?php echo get_home_url(); ?>" title="Tilbage til startsiden" class="btn btn-lg btn-default">Gå tilbage til startsiden</a>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/module-sponsors.php';?>
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>