<?php 
/**
 * Description: Module: Footer
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?>

<footer class="hidden-print">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-4">
				<?php the_field('footer_coloumn_one',options); ?>
			</div>
			<div class="hidden-xs col-md-4">
				<?php the_field('footer_coloumn_two',options); ?>
			</div>				
			<div class="col-md-4">
				<?php the_field('footer_coloumn_three',options); ?>
			</div>	
			
			<div class="col-md-12 copyright">
				<?php the_field('copyright',options); ?>
			</div>														
		</div>
	</div>
</footer>