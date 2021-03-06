<?php
/**
 * Inital compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */
include './components/keycheck.php'; 
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
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
include './components/contentchooser-cg.php'; 
$pageTitle = 'GateKeeper - Castle Group';
$logoPath = './images/cg-logo-sm.png';
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
						<p class="description">Entering and submitting your <?php echo $company; ?> community passphrase in the field below is your acknowledgement that you’ve read, understand, and agree with the Terms of Use content shown below.</p>
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