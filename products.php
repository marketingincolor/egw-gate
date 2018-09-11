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
						<p>Daily Workout videos appear here Monday through Friday compliments of <a href="https://www.fsresidential.com/corporate" target="_blank">FirstService Residential</a> and our lifestyle programs partner <a href="https://shop.myevergreenwellness.com/" target="_blank">Evergreen Wellness</a>®. We hope you enjoy!</p>
						<p style="font-size: 0.825em; font-style:italic;">We recommend you review the <a>terms of use</a> of this site before beginning any workout regimens. And also recommend that you <a>consider properly warming up</a> prior to working out. </p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<h2>Bonus Workout Programs!</h2>
						<p>All of our video programs can be watched online, for you to enjoy in the comfort and privacy of your home. Some selected programs are available for purchase on DVD as well.</p>
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
								<p><a href="./baila"><button class="button">Watch Workouts</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./little-black-dress"><img src="./images/lbd-img01.png"></a>
								<h4>Little Black Dress</h4>
								<p>Fit back into your little black dress in just two weeks, and just 8 minutes a day at home.</p>
								<p><a href="./little-black-dress"><button class="button">Watch Workouts</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./rock-the-walk"></a><img src="./images/rtw-img01.png"></a>
								<h4>Rock The Walk</h4>
								<p>Get on the road to fitness with an easy, low-impact program set to classic rock music.</p>
								<p><button class="button">COMING SOON!</button><!--<a href="./rock-the-walk"><button class="button">Watch Workouts</button></a>--></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./28-day"><img src="./images/28day-img01.png"></a>
								<h4>28 Day Challenge</h4>
								<p>Lose a size in 28 days and just 8 minutes a day with easy, effective workouts at home.</p>
								<p><a href="./28-day"><button class="button">Watch Workouts</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<a href="./gentlemen"></a><img src="./images/grye-img01.png"></a>
								<h4>Gentlemen, Restart Your Engines</h4>
								<p>Gents, bring your body out of retirement in just two weeks, and just 8 minutes a day.</p>
								<p><button class="button">COMING SOON!</button><!--<a href="./gentlemen"><button class="button">Watch Workouts</button></a>--></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php';?>