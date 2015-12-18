<?php if ( is_single()) { ?>
	<script>
		var elementPosition = $('#subnav').offset();
		$(window).scroll(function(){
		        if($(window).scrollTop() > elementPosition.top){
		              $('#subnav').css('position','fixed').css('top','0');
		              $('body').css('padding-top','56px');
		        } else {
		            $('#subnav').css('position','relative');
		            $('body').css('padding-top','0');
		        }    
		});

		$(function() {
		  $('#subnav a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});

	</script>

	<script type="text/javascript">
												$('#placeholder').click(function() {
													$('#videoelement').show();
													$('#videoelement').append('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('videoid'); ?>?modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0&amp;autoplay=1"></iframe>');
													$('#placeholder').hide();
												});
											</script>
<?php } ?>