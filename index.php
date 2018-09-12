<?php
/**
 * Inital compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );

if( in_array($savedKey, $passKeys) ) { header('Location: ./products'); }

if( $_POST ) {
    $userKey = $_POST["passcode"];
	if ( ( $userKey == $savedKey ) ||  ( in_array($userKey, $passKeys) )  ) {
		setcookie("gatekey", $userKey, 2147483647);
		header('Location: ./products');
	} else {
		header('Location: ./');
	}
}

// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
include 'contentchooser.php'; 
$pageLocation = 'First Service'; 
$pageTitle = 'GateKeeper - First Service Residential';
$logoPath = './images/fsr-logo-horizontal.png';
//$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
//echo $request_uri[0];
//var_dump($GLOBALS);
?>
<?php include 'header.php';?>
	<div class="grid-container">
		<div class="grid-x align-center-middle">
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">&nbsp;</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3 text-center"><img src="<?php echo $logoPath; ?>"></div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">
						<h3>Welcome to your Lifestyle Programs</h3>
						<p class="description">Entering and submitting your FirstService Residential community passphrase in the field below is your acknowledgement that you’ve read, understand, and agree with the Terms of Use content shown below.</p>
					</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3 text-center">
				        <form action="" method="post">
				            <input type="text" name="passcode" placeholder="Enter Passphrase" class="login">
				            <a>I don't have a passphrase!</a><br><br clear="both">
				            <input type="submit" class="button" name="SubmitButton">
				            <br><br>
				        </form>
					</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3 text-center">
						<h5 class="statement">Legal<br><span>(Please Scroll)</span></h5>
						<div class="disclaimer">
							<?php echo $siteDisclaimer; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>