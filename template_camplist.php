<?php
/**
 * Template Name: Template: Camp Overview
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

				
				<div id="sidebar-background" class="hidden-xs hidden-sm col-md-3"></div>				
				<?php include 'includes/menu-sidebar.php'; ?>
				

				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="content">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<hr>

								<?php $posts = query_posts(array(
									'post_type' => 'camps',
									'order'    => 'ASC'
								)); ?>
								<?php if ( have_posts() ) : ?>


									<div class="table-responsive">
										<table class="table table-striped campslist">
											<thead>
												<tr>
													<th>Campinfo:</th>
													<th>Dato:</th>
													<th>Sted:</th>
													<th class="col-sports">Sportsgrene:</th>
												</tr>
											</thead>
											<tbody>

									<?php while ( have_posts() ) : the_post(); ?>

					
												<?php while ( have_rows('campdates') ) : the_row(); ?>
													<?php if( get_field('visibility') ) { ?>
														<tr>
															<td>
																<a href="<?php the_permalink(); ?>" class="camp"><?php the_title(); ?></a>
																<?php wp_reset_postdata(); ?>
																<span class="dates"><?php the_sub_field('campdetails'); ?></span>
															</td>
															<td>
																<span class="week">
																	<?php $startweek = get_sub_field('startdate'); $date = new DateTime($startweek); $week = $date->format("W"); echo "Uge $week"; ?>
				 												</span>
				 												<span class="dates">
																	<?php $startdate = DateTime::createFromFormat('Ymd', get_sub_field('startdate')); echo $startdate->format('d/m/Y'); ?>
																	- 
																	<?php $enddate = DateTime::createFromFormat('Ymd', get_sub_field('enddate')); echo $enddate->format('d/m/Y'); ?>
																</span>
															</td>
															<td>
																<span class="week"><?php the_sub_field('city'); ?></span>
																<span class="dates"><?php the_sub_field('address'); ?></span>
															</td>
															<td class="sportslist">
																<?php $post_objects = get_sub_field('sports'); if( $post_objects ): ?>
																    <?php foreach( $post_objects as $post_object): ?>
																    	<a href="<?php echo get_permalink($post_object->ID); ?>" class="sports">
																    		<?php echo get_the_title($post_object->ID); ?>
																    	</a>
																    <?php endforeach; ?>
															    <?php endif; ?>
															</td>
														</tr>
													<?php } ?>
												<?php endwhile; ?>	
											
									<?php endwhile; ?>	

									</tbody>
										</table>
									</div>	
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