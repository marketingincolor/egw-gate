<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
if( !in_array($savedKey, $passKeys) ) { header('Location: /egw-gate/products'); }

// Connects display page to proper CSV file
$fileHandle = fopen('./product.csv', 'r');

// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
include 'contentchooser.php';
$pageTitle = 'Product One - '.$locationTitle;
/**
 * @TODO : VIMEO EMBED TO BE REVISED 
 * See this code - https://github.com/vimeo/vimeo-oembed-examples/blob/master/oembed/php-example.php
 * 
 * Will have to redo all CSV file structures to change the URL to the correct way for the PHP embed 
 * to work.
 */

?>
<?php include 'header.php';?>
	<div class="grid-container content">
		<div class="grid-y">
			<div class="cell shrink text-center">
				<h1>Product One</h1>
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
				<div class="grid-x grid-padding-x medium-up-2 large-up-3">

				<?php if ($fileHandle != FALSE) { ?> 
				<?php $rowCount = 0; while (($row = fgetcsv($fileHandle, 0, ',')) !==FALSE ) {  $rowCount++; ?>
					<div class="cell">
						<div class="card">
							<div class="card-section">
								<button class="img-button" data-open="itemModal<?php echo $rowCount; ?>"><img src="./images/rtw-img01.png"></button>
								<h4><?php echo $row[0]; ?></h4>
								<p><?php echo $row[1]; ?></p>
								<p><button class="button" data-open="itemModal<?php echo $rowCount; ?>">Watch Video</button></p>
							</div>
						</div>
					</div>

					<div class="reveal" id="itemModal<?php echo $rowCount; ?>" data-reveal>
						<h1><?php echo $row[0]; ?></h1>
						<p class="lead"><?php echo $row[1]; ?></p>
						<div class="responsive-embed"><iframe class="video-player" src="<?php echo $row[2]; ?>" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
				<?php } ?>

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
<?php include 'footer.php';?>