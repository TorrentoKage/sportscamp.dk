<?php 
/**
 * Description: Module - Page Header
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 


	<?php if( get_field('featured_image') ): ?>
		<section class="page-header hidden-print">
			<div class="photo" style="background: #fff url('<?php the_field('featured_image'); ?>');background-position: center <?php the_field('vposition'); ?>%;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="social">
								<a href="https://www.facebook.com/denbedsteuge/?fref=ts" target="_blank" title="Følg SportsCamp på Facebook"><i class="fa fa-facebook-official"></i></a>
								<a href="https://www.instagram.com/sportscampdk/" target="_blank" title="Følg SportsCamp på Instagram"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
