<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );

if( !in_array($savedKey, $passKeys) ) { header('Location: ./'); }

// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
include 'contentchooser.php'; 
$pageTitle = 'Lifestyle Programs - FirstService Residential';
?>
<?php include 'header.php'; ?>

	<div class="grid-container content">
		<div class="grid-y grid-padding-y">
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell medium-6">
						<div class="responsive-embed"><iframe width="560" height="315" src="http://player.vimeo.com/video/238414351" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="cell medium-6">
						<h2>Your Daily Workout</h2>
						<!--<h4>28 Day Challenge - Day 12 Strength Aerobics</h4>-->
						<p>Here is your new daily lifestyle video brought to you by FirstService Residential and Evergreen Wellness®. Don't forget to properly warm up prior to starting your workout.</p>
						<p>Consult your physician, assess your fitness levels, and follow all safety instructions before beginning this or any exercise program. These workouts are physically demanding and high-intensity exercise programs that may not be appropriate for everyone. It is important that you listen to your body, use common sense, take breaks, and hydrate as needed to avoid injury and help prevent serious medical conditions. Only you can know if you are physically able to safely perform this exercise program and follow a nutrition plan. </p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<h2>Current Workout Programs</h2>
						<p>All of our video programs can be watched online, so you can participate and get involved in the comfort and privacy of your home. Our virtual trainers and category experts will coach you through their easy-to-follow programs—follow them and enjoy the benefits!</p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x medium-up-2">
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./baila"><img src="./images/baila-img01.png"></a>
								<h4>Baila!</h4>
								<p>Dance your way to fitness. Baila!™ teaches the basics of popular Latin dances to make fitness fun!</p>
								<p><a href="./baila"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./little-black-dress"><img src="./images/lbd-img01.png"></a>
								<h4>Little Black Dress</h4>
								<p>Fit back into your little black dress in just two weeks, and just 8 minutes a day at home.</p>
								<p><a href="./little-black-dress"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./28-day"><img src="./images/28day-img01.png"></a>
								<h4>28 Day Challenge</h4>
								<p>Lose a size in 28 days and just 8 minutes a day with easy, effective workouts at home.</p>
								<p><a href="./28-day"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<!--<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./rock-the-walk"><img src="./images/rtw-img01.png"></a>
								<h4>Rock The Walk</h4>
								<p>Get on the road to fitness with an easy, low-impact program set to classic rock music.</p>
								<p><a href="./rock-the-walk"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./gentlemen"><img src="./images/grye-img01.png"></a>
								<h4>Gentlemen, Restart Your Engines</h4>
								<p>Gents, bring your body out of retirement in just two weeks, and just 8 minutes a day.</p>
								<p><a href="./gentlemen"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php';?>