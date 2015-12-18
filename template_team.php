<?php
/**
 * Template Name: Template: Team
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
				<div id="sidebar-background" class="col-md-3"></div>
				<?php include 'includes/menu-sidebar.php'; ?>
				<div class="col-md-9">
					<div class="content">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<hr>
						<div class="row">
							<?php if( have_rows('team') ):  while ( have_rows('team') ) : the_row(); ?>
								<div class="col-sm-4 col-md-4 col-lg-4">
						            <div itemprop="employee" itemscope itemtype="http://schema.org/Person">
						            	<div class="eployeeImage" style="background: url('<?php the_sub_field('image'); ?>');"></div>
						              	<div class="employeeContainer">                
							                <h2><span itemprop="name"><?php the_sub_field('name'); ?></span></h2>
							                <h3><span itemprop="jobTitle"><?php the_sub_field('jobtitle'); ?></span></h3>
							                <hr>
							                <div class="contactDetails">
							                  <span itemprop="email"><a href="mailto:<?php the_sub_field('mail'); ?>" title="Send <?php the_sub_field('name'); ?> en e-mail"><?php the_sub_field('mail'); ?></a></span>
							                </div>
						              	</div>
						            </div>
					          	</div>
							<?php endwhile; else : endif; ?>					          	
				        </div>
				        <hr>
				        <p class="lead">Vi er på kontoret fra 09:00-16:00 og det er altid en af os, du får fat på når du ringer.</p>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>