<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
if( !in_array($savedKey, $passKeys) ) { header('Location: /egw-gate/products'); }

include 'contentchooser.php'; // REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
$pageTitle = 'Little Black Dress - '.$locationTitle;
?>
<?php include 'header.php';?>
	<div class="grid-container content">
		<div class="grid-y">
			<div class="cell shrink text-center">
				<h1>Little Black Dress</h1>
				<h6><a href="./products" style="color:#fff;">&laquo; Return to Programs</a></h6>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis.</p>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x medium-up-3">
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<img src="http://satyr.io/720x16:9/?texture=cross">
								<h4>Item</h4>
								<p>Brief Item Description</p>
								<p><button class="button" data-open="itemModal1">Watch Video</button></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

<div class="reveal" id="itemModal1" data-reveal>
	<h1>Item</h1>
	<p class="lead">Brief Description</p>
	<div class="responsive-embed"><iframe width="560" height="315" src="https://www.youtube.com/embed/uilkmUoXoLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<?php include 'footer.php';?>