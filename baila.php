<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
if( !in_array($savedKey, $passKeys) ) { header('Location: ./products'); }

include 'contentchooser.php'; // REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
$pageTitle = 'Baila! - '.$locationTitle;
?>
<?php include 'header.php';?>
	<div class="grid-container content">
		<div class="grid-y">
			<div class="cell shrink text-center">
				<h1>Baila!</h1>
				<h6><a href="./products" style="color:#fff;">&laquo; Return to Programs</a></h6>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<p>Welcome to Baila!™, the dance-inspired fitness workout that takes you through Latin America – in the privacy of your home. Learn the basic steps and enjoy great workouts with easy-to-follow, choreographed routines!</p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x medium-up-3">
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Samba</h4>
								<p>Full 20 Minute Samba Workout</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Merengue</h4>
								<p>Full 20 Minute Merengue Workout</p>
								<p><button class="button" data-open="itemModal2">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Salsa</h4>
								<p>Full 20 Minute Salsa Workout</p>
								<p><button class="button" data-open="itemModal3">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Pasodoble</h4>
								<p>Full 20 Minute Padodoble Workout</p>
								<p><button class="button" data-open="itemModal4">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Cha Cha</h4>
								<p>Full 20 Minute Cha Cha Workout</p>
								<p><button class="button" data-open="itemModal5">Watch Video</button></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<p>No dance experience is needed to enjoy this low-impact, high-energy experience!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="reveal" id="itemModal1" data-reveal>
		<h1>Samba</h1>
		<p class="lead">Full 20 Minute Samba Workout</p>
		<div class="responsive-embed"><iframe src="http://player.vimeo.com/video/266129041" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="reveal" id="itemModal2" data-reveal>
		<h1>Merengue</h1>
		<p class="lead">Full 20 Minute Merengue Workout</p>
		<div class="responsive-embed"><iframe src="https://player.vimeo.com/video/268645068" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="reveal" id="itemModal3" data-reveal>
		<h1>Salsa</h1>
		<p class="lead">Full 20 Minute Salsa Workout</p>
		<div class="responsive-embed"><iframe src="https://player.vimeo.com/video/268643260" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="reveal" id="itemModal4" data-reveal>
		<h1>Pasodoble</h1>
		<p class="lead">Full 20 Minute Pasodoble Workout</p>
		<div class="responsive-embed"><iframe src="https://player.vimeo.com/video/268644161" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="reveal" id="itemModal5" data-reveal>
		<h1>Cha Cha</h1>
		<p class="lead">Full 20 Minute Cha Cha Workout</p>
		<div class="responsive-embed"><iframe src="https://player.vimeo.com/video/268645935" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

<?php include 'footer.php';?>



