<?php 
/**
 * Description: Module: Header
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */

 $nav_primary = array(
	'theme_location'  => '',
	'menu'            => 'Primær Menu',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'navbar',
	'menu_id'         => 'navbar',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '' 
 ); ?>

	<header class="hidden-print">
	
		<div class="branding">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<a href="http://www.sportscamp.dk/" title="SportsCamps - en oplevelse for livet!"><img src="<?php the_field('logo',options); ?>" alt="SportsCamp logo" class="logo img-responsive"></a>
					</div>
					<div class="col-sm-8 col-md-5">
						<div class="icon-group">
							<div class="group">
								<span class="text"><i class="fa fa-phone"></i> <?php the_field('telephone',options); ?></span>
								<span class="subtext"><?php the_field('telephone_subtext',options); ?></span>
							</div>
							<div class="group">
								<span class="text"><i class="fa fa-clock-o"></i> <?php the_field('time',options); ?></span>
								<span class="subtext"><?php the_field('time_subtext',options); ?></span>
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm col-md-4">
						<?php include 'module-searchform.php'; ?>
					</div>		
				</div>
			</div>
		</div>

		<div class="nav_primary">
			<div class="container">
				<nav>
					<?php wp_nav_menu( $nav_primary ); ?>
					<div class="visible-xs visible-sm">
						<a href="tel:4556204000"><span class="text"><i class="fa fa-phone"></i> <?php the_field('telephone',options); ?></span></a>
						<span class="subtext"><?php the_field('telephone_subtext',options); ?></span>
					</div>
				</nav>
			</div>
		</div>

		<ul class="mobile-header visible-xs visible-sm ">
			<li>
							<a href="http://www.sportscamp.dk/" title="SportsCamps - en oplevelse for livet!"><img src="<?php the_field('logo',options); ?>" alt="SportsCamp logo" class="logo img-responsive"></a>
						</li>
						<li>
							<a href="#" title="Åben menu" class="menu-btn"><i class="fa fa-bars"></i></a>
						</li>
		</ul>

	</header>