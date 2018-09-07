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
//$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
//echo $request_uri[0];
//var_dump($GLOBALS);
?>
<?php include 'header.php';?>
	<div class="grid-container">
		<div class="grid-y grid-frame align-center-middle text-center">
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell small-10 medium-6 medium-offset-3"><img src="<?php echo $logoPath; ?>"></div>
					<div class="cell small-10 medium-6 medium-offset-3"><h1>Welcome to your<br>Lifestyle Program Portal</h1></div>
					<div class="cell small-10 medium-6 medium-offset-3">Please enter your <strong>passphrase</strong> to continue:</div>
					<div class="cell small-10 medium-6 medium-offset-3">
				        <form action="" method="post">
				            <input type="text" name="passcode">
				            <input type="submit" class="button" name="SubmitButton">
				        </form>
					</div>
					<div class="cell small-10 medium-6 medium-offset-3" style="display:none;">
						<h5>Disclaimer - This site uses Cookies to remember your passphrase ONLY. Test Code=fsr001</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>