<?php
/**
 * Footer component for gateway system.
 *
 */
?>
	<div class="grid-container fluid footer">
		<div class="grid-x">
			<div class="cell text-center">
				<p>&copy <?php echo date('Y'); ?> Evergreen Wellness&reg; LLC | All Rights Reserved | <a href="/terms-of-use">Terms of Use</a> | <a href="/privacy-policy">Privacy Policy</a></p>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/js/foundation.min.js"></script>
  <script>
  	$(document).foundation();
  </script>

	<script>
    $(".close-button").click(function() { 
        $('.video-player').each(function(index) {
            $(this)[0].contentWindow.postMessage('{"method":"unload"}','*');
        });
    }); 
    function validatePasscode(){
      // Fill Progress Bar on verification page
      $(".progress-meter").css({"width":"100%","transition":"4.7s"});
      setTimeout(function(){
        location.href = '/home';
      },5000);
    }
    if (location.href.indexOf('login-validation') > -1) {
      validatePasscode();
    }

	</script>

	</body>
</html>