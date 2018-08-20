<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );

if( !in_array($savedKey, $passKeys) ) { header('Location: ./'); }

include 'contentchooser.php'; // REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
$pageTitle = 'Products - First Service Residential';

?>
<?php include 'header.php'; ?>

	<div class="grid-container content">
		<div class="grid-y grid-padding-y">
			<div class="cell" style="display:none;">
				<div class="grid-x grid-padding-x">
					<div class="cell medium-6">
						<div class="responsive-embed"><iframe width="560" height="315" src="https://www.youtube.com/embed/uilkmUoXoLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
					</div>
					<div class="cell medium-6">
						<h2>Daily Feature Program</h2>
						<h4>Sit And Get Fit</h4>
						<p>Brief Item Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis. Ut posuere sed augue sit amet efficitur.</p>
						<p>Ut aliquet efficitur ligula, a consectetur felis. Proin tristique ut augue nec luctus. Curabitur a sapien pretium, auctor elit a, efficitur erat. Donec tincidunt dui vel velit bibendum euismod. Cras vitae nibh dui. Aliquam erat volutpat. Etiam sit amet arcu a erat efficitur facilisis. Ut viverra dapibus turpis, et ornare justo. Integer in dui cursus, dignissim tortor a, hendrerit risus.</p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<h2>Current Programs</h2>
						<p>All of our video programs can be watched online, so you can participate and get involved in the comfort and privacy of your home. Our virtual trainers and category experts will coach you through their easy-to-follow programs—follow them and enjoy the benefits!</p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x medium-up-2">
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/baila-img01.png">
								<h4>Baila!</h4>
								<p>Dance your way to fitness. Baila!™ teaches the basics of popular Latin dances to make fitness fun!</p>
								<p><a href="./baila"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/lbd-img01.png">
								<h4>Little Black Dress</h4>
								<p>Fit back into your little black dress in just two weeks, and just 8 minutes a day at home.</p>
								<p><a href="./little-black-dress"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/28day-img01.png">
								<h4>28 Day Challenge</h4>
								<p>Lose a size in 28 days and just 8 minutes a day with easy, effective workouts at home.</p>
								<p><a href="./28-day"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<!--<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/rtw-img01.png">
								<h4>Rock The Walk</h4>
								<p>Get on the road to fitness with an easy, low-impact program set to classic rock music.</p>
								<p><a href="./rock-the-walk"><button class="button">More Info</button></a></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="./images/grye-img01.png">
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