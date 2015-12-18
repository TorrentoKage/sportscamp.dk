<?php
/**
 * Description: Single Camps
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
 get_header(); ?>

 	<?php include 'includes/module-header.php'; ?>

	<?php if(is_single( '4' )){ ?>

		<div class="container archive-list">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 text-center">
					<br><br><br>
					<h1>Vælg typen af SportsCamp</h1>
				</div>
			</div>

			<div class="row">
				<div class="list">

					<?php $args = array(
							'post_type' => 'camps',
							'posts_per_page' => -1,
							'post_status' => 'publish',
							'order' => 'ASC',
							'post_parent' => $post->ID
						);
					$loop = new WP_Query( $args ); ?>

					<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-6 list-item">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="photo" style="background: #efefef url('<?php the_field('featured_image'); ?>');">
								</div>
							</a>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item">
							  	<h2 class="h4 title"><?php the_title(); ?></h2>
							  	<p><?php the_field('list_description' ); ?></p>
							 </a>
						</div>
					<?php endwhile; else : endif; ?>

				</div>
				
			</div>
		</div>
		<br><br>
		<?php include 'includes/module-sponsors.php';?>	
		<?php include 'includes/module-newsletter.php';?>
		<?php include 'includes/module-footer.php'; ?>

	<?php } else { ?>

 	<div class="landingpage">
	 	
	 	<div class="hidden-xs hidden-sm subnav" id="subnav">
		 	<div class="container">
			 	<div class="row">
				 	<div class="col-md-12 col-sm-12 col-xs-12">
					 	<ul id="submenu">
						 	<?php if( get_field('add_introduction') ) { ?><li><a href="#introduktion"><?php the_title(); ?>:</a></li><?php } ?>
						 	<?php if( get_field('add_information') ) { ?><li><a href="#information">Info</a></li><?php } ?>
						 	<?php if( have_rows('campdates') ): ?><li><a href="#datoer">Hvornår?</a></li><?php else : endif; ?>
						 	<?php if( get_field('add_instructers') ) { ?><li><a href="#instruktorer">Instruktører</a></li><?php } ?>
						 	<?php if( get_field('add_practical') ) { ?><li><a href="#praktisk">Praktisk</a></li><?php } ?>
						 	<?php if( get_field('add_testimonial') ) { ?><li><a href="#udtalelser">Det siger andre</a></li><?php } ?>
						 	<?php if( get_field('add_booking') ) { ?><li><a href="#reserver">Reserver plads</a></li><?php } ?>
						 	<?php if( get_field('add_introduction') ) { ?><li class="pull-right"><a href="<?php the_field('signup_url'); ?>" class="btn btn-signup btn-success">Køb plads på <?php the_title(); ?>  <i class="fa fa-angle-double-right"></i></a></li><?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php if( get_field('add_introduction') ) { ?>
			<section id="introduktion">
				<div class="module-intro" style="background: #023875 url('<?php the_field('background_image'); ?>');">
					<div class="container">
						<div class="row">
						  	<div class="row-height">
						    	<div class="col-xs-12 col-md-7 col-sm-12 col-md-height col-md-middle col-image">
						      		<div class="intro">
							      		<div class="inside">
											<h1><?php the_field('title'); ?></h1>
											<h2><?php the_field('description'); ?></h2>

											<?php if( get_field('video_placeholder') ) { ?>
												<div class="embed-responsive embed-responsive-16by9">
													<div id="videoelement" style="display:none;"></div>
													<div id="placeholder">
														<i class="fa fa-youtube-play"></i>
														<img src="<?php the_field('video_placeholder'); ?>" alt="SportsCamp" class="img-responsive">
													</div>
												</div> 
											<?php } else { ?>
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('videoid'); ?>?modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0"></iframe>
												</div> 											
											<?php } ?>

											<br><?php the_field('subtext'); ?>
											<?php if( get_field('signup_url') ) { ?>
									    		<div class="visible-xs">
									    			<a href="<?php the_field('signup_url'); ?>" class="btn btn-signup btn-success">Tilmeld dig <?php the_title(); ?></a>
									    		</div>
									    	<?php } ?>
							      		</div>
							  		</div>
						    	</div>
						   		<div class="hidden-xs col-md-5 col-sm-12 col-md-height col-md-middle col-text">
						      		<div class="signup">
							      		<div class="inside">
											<h2><?php the_field('form_title'); ?></h2>
											<p class="lead"><?php the_field('form_description'); ?></p>
											<?php $formid = get_field('form_id'); gravity_form( $formid, false, false, false, '', false, 100 ); ?>
											<p class="disclaimer"><?php the_field('form_subtext'); ?></p>
							      		</div>
							  		</div>
						    	</div>						    	
						  	</div>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>


		<?php if( get_field('add_information') ) { ?>
			<section id="information">
				<div class="module module-information">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1><?php the_field('information_title'); ?></h1>
								<hr>
							</div>
							<div class="col-md-6">
								<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_field('left_coloumn_image'); ?>" alt="SportsCamp" class="img-responsive">
								<br>
								<?php the_field('left_coloumn'); ?>
							</div>
							<div class="col-md-6">
								<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php the_field('right_coloumn_image'); ?>" alt="SportsCamp" class="img-responsive">
								<br>
								<?php the_field('right_coloumn'); ?>
							</div>
							<?php if( get_field('signup_url') ) { ?>
								<div class="col-md-12">
									<div class="visible-xs visible-sm">
										<br>
										<a href="<?php the_field('signup_url'); ?>" class="btn btn-signup btn-success">Tilmeld dig <?php the_title(); ?></a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>


			<?php if( have_rows('campdates') ): ?>
				<section id="datoer">
					<div class="module module-dates">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2>Campoversigt 2016</h2>
								</div>
								
								<?php if( get_field('camp_map') ) { ?><div class="col-md-7"><?php } else { ?> <div class="col-md-12"> <?php } ?>
									
									<div class="table-responsive">
										<table class="table table-striped campslist">
											<thead>
												<tr>
													<th>Campinfo:</th>
													<th>Dato:</th>
													<th>Sted:</th>
													<?php if( !get_field('camp_map') ) { ?>
														<th>Pris:</th>
													<?php } ?>
													<th class="col-sports">Sportsgrene:</th>
													<?php if( !get_field('camp_map') ) { ?>
														<th>Bestilling:</th>
													<?php } ?>
												</tr>
											</thead>
											<tbody>
												<?php while ( have_rows('campdates') ) : the_row(); ?>
													<tr>
														<td>
															<span class="week"><?php the_title(); ?></span>
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
														<?php if( !get_field('camp_map') ) { ?>
															<td>
																<span class="week"><?php the_sub_field('price'); ?></span>
																<span class="dates">Betal nu - eller i flere rater</span>
															</td>
														<?php } ?>
														<td class="sportslist">
															<?php $post_objects = get_sub_field('sports'); if( $post_objects ): ?>
															    <?php foreach( $post_objects as $post_object): ?>
															    	<a href="<?php echo get_permalink($post_object->ID); ?>" class="sports">
															    		<?php echo get_the_title($post_object->ID); ?>
															    	</a>
															    <?php endforeach; ?>
														    <?php endif; ?>
														</td>
														<?php if( !get_field('camp_map') ) { ?>
															<td>
																<a href="<?php the_field('signup_url'); ?>" class="btn btn-success">Køb plads <i class="fa fa-angle-double-right"></i></a>
															</td>
														<?php } ?>
													</tr>
												<?php endwhile; ?>	
											</tbody>
										</table>
									</div>
								</div>

								<?php if( get_field('camp_map') ) { ?>
									<div class="col-md-5">
										<img src="<?php the_field('camp_map'); ?>" class="img-responsive">
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</section>
			<?php else : endif; ?>
		


		<?php if( get_field('add_instructers') ) { ?>
			<section id="instruktorer">
				<div class="module module-instructors">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1><?php the_field('instructor_title'); ?></h1>
								<hr>
								<p class="lead"><?php the_field('instructor_intro'); ?></p>
								<div class="row">
									<?php if( have_rows('instructors') ):  while ( have_rows('instructors') ) : the_row(); ?>
										<div class="col-md-6">
											<div class="row no-gutter">
											  <div class="row-height">
											    <div class="col-xs-12 col-sm-6 col-sm-height">
											      <div class="inside inside-full-height" style="background:url('<?php the_sub_field('image'); ?>');background-size:cover;background-position:center center;background-repeat:no-repeat;">
											        
											      </div>
											    </div>
											    <div class="col-xs-12 col-sm-6 col-sm-height col-sm-middle">
											      <div class="inside">
										        	<h3><?php the_sub_field('name'); ?></h3>
													<p class="lead"><?php the_sub_field('intro'); ?></p>
													<p><?php the_sub_field('description'); ?></p>	
											      </div>
											    </div>
											  </div>
											</div>
										</div>
									<?php endwhile; else : endif; ?>
								</div>
							</div>
							<?php if( get_field('signup_url') ) { ?>
								<div class="col-md-12">
									<div class="visible-xs visible-sm">
										<br>
										<a href="<?php the_field('signup_url'); ?>" class="btn btn-signup btn-success">Tilmeld dig <?php the_title(); ?></a>
									</div>
								</div>
							<?php } ?>							
						</div>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php if( get_field('add_practical') ) { ?>
			<section id="praktisk">
				<div class="module module-practical" style="background: #023875 url('<?php the_field('practical_info_background'); ?>');">
					<div class="container">
						<div class="row">
		                		<div class="col-md-12">

				                    <ul class="nav nav-tabs" role="tablist">
					                    <?php if( have_rows('practical_info') ): $i = 1; while ( have_rows('practical_info') ) : the_row(); ?>
										    <li role="presentation" <?php if ($i == 1): ?>class="active"<?php endif; ?>>
										    	<a href="#tab<?php echo $i; ?>" aria-controls="tab<?php echo $i; ?>" role="tab" data-toggle="tab">
										    		<?php the_sub_field('tab_title'); ?>
										    	</a>
										    </li>
										<?php $i++; endwhile; else : endif; ?>
				                    </ul>

			                    	<div class="tab-content">
			                    		<?php if( have_rows('practical_info') ): $i = 1; while ( have_rows('practical_info') ) : the_row(); ?>
				                        	<div role="tabpanel" class="tab-pane fade <?php if ($i == 1): ?>in active<?php endif; ?>" id="tab<?php echo $i; ?>">
				                               	<div class="row">
				                               		<div class="col-md-12">
				                              			<h2><?php the_sub_field('tab_title'); ?></h2>
				                              			<hr>
				                               		</div>
				                                	<div class="col-md-4">
				                                		<?php the_sub_field('coloumn_one'); ?>
				                                	</div>
				                                	
				                                	<div class="col-md-4">
				                                		<?php the_sub_field('coloumn_two'); ?>
				                                	</div>
				                                	<div class="col-md-4">
				                                		<?php the_sub_field('coloumn_three'); ?>
				                                	</div>
				                            	</div>
				                        	</div>
				                        <?php $i++; endwhile; else : endif; ?>
			                    	</div>
		                		</div>
						</div>
					</div>
				</div>	
			</section>
		<?php } ?>

		
		<?php if( get_field('add_testimonial') ) { ?>
			<section id="udtalelser">	
				<div class="module module-testimonials">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1><?php the_field('testimonial_title'); ?></h1>
								<p class="lead"><?php the_field('testimonial_intro'); ?></p>
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner" role="listbox">

								    <?php if( have_rows('testimonial') ):  $i = 1; while ( have_rows('testimonial') ) : the_row(); ?>
									    <div class="item <?php if ($i == 1): ?>active<?php endif; ?>">
									     	<p class="lead"><span class="quotemark">»</span><?php the_sub_field('testimonial'); ?><span class="quotemark">«</span></p>
									     	<p class="byline"><b><?php the_sub_field('author'); ?></b> - <?php the_sub_field('author_byline'); ?></p>
									    </div>
									<?php $i++; endwhile; else : endif; ?>					    

								  </div>

								  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>

								  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>

								</div>

							</div>
						</div>
					</div>
				</div>	
			</section>
		<?php } ?>

		<?php if( get_field('add_sponsers') ) { ?>
			<?php include 'includes/module-sponsors.php';?>	
		<?php } ?>

		<?php if( get_field('add_booking') ) { ?>
			<section id="reserver">
				<div class="module module-hsignup"  style="background: #023875 url('<?php the_field('booking_background_image'); ?>');">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-2 col-md-8 text-center">
								<h2><?php the_field('booking_title'); ?></h2>
								<p class="lead"><?php the_field('booking_intro'); ?></p>
								<?php $bookingformid = get_field('booking_form_id'); gravity_form( $bookingformid, false, false, false, '', false, 200 ); ?>
								<p class="disclaimer"><?php the_field('booking_subtext'); ?></p>
							</div>
						</div>
					</div>
				</div>	
			</section>
		<?php } ?>

	</div>


<?php } ?>



<?php get_footer(); ?>