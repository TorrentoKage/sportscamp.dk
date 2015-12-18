

		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
		<script>function downloadJSAtOnload(){var d=document.createElement("script");d.src="<?php echo get_template_directory_uri(); ?>/assets/js/defer.js",document.body.appendChild(d)}window.addEventListener?window.addEventListener("load",downloadJSAtOnload,!1):window.attachEvent?window.attachEvent("onload",downloadJSAtOnload):window.onload=downloadJSAtOnload;</script>
		<script>function init() {var vidDefer = document.getElementsByTagName('iframe');for (var i=0; i<vidDefer.length; i++) {if(vidDefer[i].getAttribute('data-src')) {vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));}}}window.onload = init;</script>
		<script>function init() {var imgDefer = document.getElementsByTagName('img');for (var i=0; i<imgDefer.length; i++) {if(imgDefer[i].getAttribute('data-src')) {imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));} } }window.onload = init;</script>

		<?php include 'includes/scripts.php'; ?>
		<?php wp_footer(); ?>

			
	</body>
</html>
