<?php 
/**
 * Description: Module: Newsletter
 *
 * @package SportsCamp
 * @subpackage sportscamp.dk
 * @since Version 1.0
 * @author Mikkel Tschentscher
 */
?> 

	<div class="block-off">
		<svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100">
			<polygon fill="#022D5E" points="100,100 0,100 100,0 "></polygon>
		</svg>
	</div>

	<section class="newsletter-signup hidden-print">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<form action="//sportscamp.us1.list-manage.com/subscribe/post?u=30d6b142c74fab555855f71d6&amp;id=09505148b0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<h3><?php the_field('title',options); ?></h3>
						<div class="input-group input-group-lg">
					      <input type="email" class="form-control input-lg newsletter" placeholder="Indtast din e-mail" value="" name="EMAIL" id="mce-EMAIL">
					      <span class="input-group-btn">
					        <button class="btn btn-default btn-lg" name="subscribe" id="mc-embedded-subscribe" type="submit">Hold mig opdateret</button>
					      </span>
					    </div>
					    <p class="disclaimer small"><?php the_field('subtext',options); ?></p>
					</form>
				</div>
			</div>
		</div>
	</section>

	<div class="block-off">
		<svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100">
			<polygon fill="#023875" points="0,100 100,100 0,0 "></polygon>
		</svg>
	</div>