<?php 
/**
 * Description: Module: Breadcrumbs
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?>
<section class="breadcrumbs hidden-print">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="pull-left"><?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
				<div class="pull-right hidden-md hidden-lg"><a  class="pull-right sub-menu-btn"><i class="fa fa-list"></i> MERE</a></div>
			</div>
						
			<div class="hidden-xs hidden-sm accessibility">
				<?php edit_post_link('Rediger', '', ''); ?>
				<a href="#" title="Udskriv siden" onclick="printPage()"><i class="fa fa-print"></i> Udskriv side</a>
			</div>
		</div>
	</div>
</section>
