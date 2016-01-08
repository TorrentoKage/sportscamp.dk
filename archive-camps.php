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
 	
	<?php if( get_field('featured_image', 122) ): ?>
		<section class="page-header">
			<div class="photo" style="background: #fff url('<?php the_field('featured_image', 122); ?>');background-position: center <?php the_field('vposition', 122); ?>%;"></div>
		</section>
	<?php endif; ?>

 	<?php include 'includes/module-breadcrumbs.php';?>

	
 	<section class="module module-primary">
	 	<div class="container">
		 	<div class="row">
			 	<div class="col-md-12">

			 	<?php $posts = query_posts(array(
									'post_type' => 'camps',
									'order'    => 'ASC'
								)); ?>
								<?php if ( have_posts() ) : ?>

									<h1>Campoversigt:</h1>
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
														<tr data-startdate="<?php the_sub_field('startdate'); ?>">
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
	</section>
		
	<div class="container archive-list">
		<div class="row">
			<div class="col-md-12">
				<br><br>
				<h1><?php the_field('title', 122); ?></h1>
				<p class="lead"><?php the_field('intro', 122); ?></p>
				<hr>
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
					<?php endwhile; ?>		
				<?php endif; ?>
			</div>
		</div>
	</div>

	<br><br>


	<?php include 'includes/module-sponsors.php';?>	
	<?php include 'includes/module-newsletter.php';?>
	<?php include 'includes/module-footer.php'; ?>

<?php get_footer(); ?>
