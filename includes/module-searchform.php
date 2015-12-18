<?php 
/**
 * Description: Module - Searchform
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 
<form method="get" class="search" action="<?php echo home_url( '/' ); ?>">
		<div class="form-group">
			<i class="fa fa-search"></i>		
			<input type="search" class="form-control" placeholder="Søg efter noget bestemt.." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</div>
</form>