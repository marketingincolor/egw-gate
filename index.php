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
$logoPath = './images/fsr-logo-clear.svg';
//$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
//echo $request_uri[0];
//var_dump($GLOBALS);
?>
<?php include 'header.php';?>
	<div class="grid-container">
		<div class="grid-x align-center-middle text-center">
			<div class="cell">
				<div class="grid-x grid-padding-x">
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">&nbsp;</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3"><img src="<?php echo $logoPath; ?>"></div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3"><h1>Welcome to your<br>Lifestyle Program Portal</h1></div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">Please enter your <strong>passphrase</strong> to continue:</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">
				        <form action="" method="post">
				            <input type="text" name="passcode">
				            <input type="submit" class="button" name="SubmitButton">
				        </form>
					</div>
					<div class="cell small-10 small-offset-1 medium-6 medium-offset-3">
						<h5 class="statement">Disclaimer - This site uses Cookies to remember your passphrase ONLY.</h5>
						<div class="disclaimer">WARNING!<br>
						Consult your physician, assess your fitness levels, and follow all safety instructions before beginning this or any exercise program, or nutrition plan. This program will require physical effort. It is extremely important that you listen to your body, use common sense, take breaks, and hydrate to avoid injury, and help prevent potentially serious medical conditions. If at any time you feel you are exercising beyond your current fitness abilities, or you feel any discomfort, pain, dizziness, or nausea, you should discontinue exercise immediately, and seek appropriate medical attention. Certain programs may utilize resistance bands, weights, and other equipment which, if not used correctly, could lead to serious injury. For your safety, you must use any equipment shown in the workouts only as demonstrated, inspect any equipment prior to each use and refrain from using any equipment that appears damaged, worn or defective. For any equipment that requires an attachment, always use a secure, proper, and stable anchor. For exercises that require wrapping exercise bands around your body, make sure the bands are firmly secured to prevent slipping and injury. When performing exercises using a chair, make sure your chair is stable, strong enough to hold your weight and does not move. If you do not think you can safely perform exercises with your chair, you should use modified exercises to stay safe without use of the chair. Do not substitute any other equipment for the proper equipment. Improper form or use of equipment can cause serious and permanent injury. Always wear proper footwear that allows you to maintain balance, provides for smooth, and supported movement, and avoid injuries, especially during exercises that may require walking, jumping, bending, twisting, turning, or pivoting. Always make sure your exercise area is clear of any obstacles including pets, children, other people, furniture, or equipment not currently in use. If you have any unique or special medical conditions, such as if you are pregnant, or if you have had or think you may have knee, ankle, shoulder or spinal (back or neck) problems, you must consult with a physician to understand all risks, contraindications and complications of using this program, and receive authorization from them before beginning. By using this program, you assume all dangers, hazards and risks of injury in the use of this program. Accordingly, to the extent permitted by law, Jaime Brenkus, Nestor Garcia, Evergreen Wellness LLC, Marketing In Color Inc. and all of their employees, owners, partners, or affiliates, will not be liable to any person or entity for any damage or loss caused or alleged to be caused directly or indirectly by any workout, nutrition plan, advice or other content. By clicking “Submit”, I acknowledge that I have read, understand, and agree with this warning.
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>