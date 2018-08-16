<?php
/**
 * Inital compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */
$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');

$passPhrase = 'fsr001'; 
if(isset($_COOKIE["gatekey"])) {
    $savedKey = $_COOKIE["gatekey"];
} else{
    $savedKey = 'unknown';
}
//if(isset($_POST['SubmitButton'])){
if( $_POST ) {
    $userKey = $_POST["passcode"];
	if ( $userKey == $passPhrase ) {
		header('Location: /egw-gate/products');
	} else {
		header('Location: /egw-gate/');
	}
}
$pageTitle = 'GateKeeper - First Service Residential';
?>
<?php include 'header.php';?>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<h1>Welcome, </h1>
		</div>
		<div class="grid-x grid-margin-x">Welcome!</div>
		<div class="grid-x grid-margin-x">Please enter your Passphrase to continue!</div>
        <form action="" method="post">
            <input type="text" name="passcode">
            <input type="submit" name="SubmitButton">
        </form>
	</div>
<?php include 'footer.php';?>