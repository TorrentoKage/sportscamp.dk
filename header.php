<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="da" dir="ltr" class="ie6 no-js"><![endif]-->
<!--[if IE 7 ]><html lang="da" dir="ltr" class="ie7 no-js"><![endif]-->
<!--[if IE 8 ]><html lang="da" dir="ltr" class="ie8 no-js"><![endif]-->
<!--[if IE 9 ]><html lang="da" dir="ltr" class="ie9 no-js"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da" dir="ltr" class="no-js"><!--<![endif]-->
<head>

	<title><?php wp_title(); ?></title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include 'includes/styles.php';?>
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="http://www.sportscamp.dk/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://www.sportscamp.dk/favicon.ico" type="image/x-icon">

	<?php if( get_field('google_analytics_id', options) ): ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', '<?php the_field('google_analytics_id', options); ?>', 'auto');
		  ga('send', 'pageview');
		</script>
	<?php endif; ?>

</head>
<body>