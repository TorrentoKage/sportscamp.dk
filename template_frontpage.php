<?php
/**
 * Template Name: Template: Frontpage
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>
 	<?php include 'includes/module-page-header.php';?>
 	
	<section class="feature" id="feature">
 		<div class="module">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-xs-12">
	 					<div>
	 						<h1><?php the_field('title'); ?></h1>
	 						<p class="lead"><?php the_field('intro'); ?></p>
	 						<div>
		 						<a href="<?php the_field('button_url'); ?>" title="<?php the_field('title'); ?>" class="btn btn-lg btn-success">
		 							<?php the_field('button_text'); ?> &nbsp;<i class="fa fa-angle-double-right"></i>
		 						</a>
	 						</div>					
	 						<div class="fb-like" 
	 							 data-href="https://www.facebook.com/denbedsteuge"
	 							 data-layout="standard"
	 							 data-action="like"
	 							 data-colorscheme="dark"
	 							 data-show-faces="false"
	 							 data-share="false">
	 						</div>
	 					</div>

	 					<a href="<?php the_field('badge_url'); ?>" title="<?php the_field('badge_text'); ?>" class="landing-hero__splash">
							<div class="splash-image"></div>
							<div class="splash-content">
								<h2>
									<?php the_field('badge_text'); ?>
								</h2>
								<h2 class="larger">
									<?php the_field('badge_text_two'); ?>
								</h2>
							</div>
						</a>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
 	</section>
 	
	<section class="module">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><?php the_field('camp_title'); ?></h1>
					<p class="lead"><?php the_field('camp_subtitle'); ?></p>				
				</div>
			</div>
			<div class="row">
				<div class="list">
			        <?php $posts = query_posts(array(
						'post_type' => 'camps',
						'post_parent' => 0,
						'order'    => 'ASC'
					)); ?>
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if( get_field('visibility') ) { ?>
								<?php include 'includes/module-camps-list-item.php' ?>
							<?php } ?>
						<?php  endwhile; ?>		
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<div class="block-off">
		<svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100">
			<polygon fill="#023875" points="100,100 0,100 100,0 "></polygon>
		</svg>
	</div>
	
	<section class="module module-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php the_field('satisfaction_content'); ?>
				</div>
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<a href="#" class="badge-overlay"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="http://www.sportscamp.dk/wp-content/uploads/2015/10/Guarantee_seal_SportsCamp.png" alt="SportsCamp Tilfredshedsgarenti"></a>
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>?modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="block-off">
		<svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 175 175" enable-background="new 0 0 175 175">
			<polygon fill="#fff" points="0,175 175,175 0,0 "></polygon>
		</svg>
	</div>

	<section class="module module-subtle">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php the_field('academy_image'); ?>" alt="SportsCamp Academy" class="img-responsive">
					
					<div class="fact-box">
						<?php the_field('academy_content'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('team_image'); ?>" alt="SportsCamp teamet" class="img-responsive">
					
					<div class="fact-box team-box">
						<?php the_field('team_content'); ?>
					</div>
				</div>				
				<!-- 
					<div class="col-md-6">
						<div class="form-box">
							<h2><?php the_field('brochure_title'); ?></h2>
							<p><?php the_field('brochure_description'); ?></p>
							<p><b>Udfyld formularen:</b></p>
							<?php $formid = get_field('form_id'); gravity_form( $formid, false, false, false, '', false ); ?>
						</div>
					</div>
				-->
			</div>
		</div>
	</section>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>	