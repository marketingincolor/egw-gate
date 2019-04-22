<?php
/**
 * Footer component for gateway system.
 *
 */
?>

	<div class="grid-container fluid footer">
		<div class="grid-x">
			<div class="cell text-center">
				<p>&copy <?php echo date('Y'); ?> Evergreen Wellness&reg; LLC | All Rights Reserved | <a href="/terms-of-use">Terms of Use</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="mailto:support@myevergreenwellness.com?subject=28-Day Size Down Challenge Question">Help</a></p>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/js/foundation.min.js"></script>
  <script>
  	$(document).foundation();
  </script>

	<script>
    $('.cell').find('button').click(function(){
      var title = $(this).data('title');
      var video = $(this).data('video');

      $('#video-modal').foundation('open');

      $('#video-modal').on('open.zf.reveal',function(){
        $(this).find('#video-title').text(title);
        $(this).find('#video-url').attr('src',video);
      });

      $('#video-modal').on('closed.zf.reveal',function(){
        $(this).find('#video-url').attr('src','');
      });
    });

    function validatePasscode(){
      // Fill Progress Bar on verification page
      $(".progress-meter").css({"width":"100%","transition":"4.7s"});
      // Send to next screen after 5 seconds
      setTimeout(function(){
        location.href = '/home';
      },5000);
    }
    // Only run function on login-validation page
    if (location.href.indexOf('login-validation') > -1) {
      validatePasscode();
    }
    // Smothe scroll to documents section if first-time visitor
    $("#first-time").click(function() {
        $('html, body').animate({
          scrollTop: $("#documents").offset().top
        },750);
    });

	</script>

	</body>
</html>