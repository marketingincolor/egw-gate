<?php
/* Content chooser */
function selectData($selector) {
  if (strpos($selector, 'po') !== false) {
    $comm = "Pleasant Oaks";
  }else if (strpos($selector, 'mg') !== false) {
    $comm = "Maple Grove";
  }
	switch ($comm) :
		case 'Pleasant Oaks' :
			return array(
				'master' => 'fsres',
				'locationTitle' => $comm, 
				'logoPath' => './images/fsr-logo-horizontal.png', 
				'companyName' => 'Evergreen Wellness'
			);
		case 'Maple Grove' :
			return array(
				'master' => 'fsres',
				'locationTitle' => $comm, 
				'logoPath' => './images/fsr-logo-horizontal.png', 
				'companyName' => 'Evergreen Wellness'
			);
		default :
			return array(
				'master' => 'gateway',
				'locationTitle' => 'Location', 
				'logoPath' => './images/fsr-logo-horizontal.png', 
				'companyName' => 'Evergreen Wellness'
			);
	endswitch;
}

$buildArray     = selectData($savedKey);
$master         = $buildArray['master'];
$logoPath       = $buildArray['logoPath'];
$company        = $buildArray['companyName'];
$community      = $buildArray['locationTitle'];
$companyUrl     = "https://myevergreenwellness.com/";
$siteDisclaimer = "WARNING!<br>Consult your physician, assess your fitness levels, and follow all safety instructions before beginning this or any exercise program, or nutrition plan. This program will require physical effort. It is extremely important that you listen to your body, use common sense, take breaks, and hydrate to avoid injury, and help prevent potentially serious medical conditions. If at any time you feel you are exercising beyond your current fitness abilities, or you feel any discomfort, pain, dizziness, or nausea, you should discontinue exercise immediately, and seek appropriate medical attention. Certain programs may utilize resistance bands, weights, and other equipment which, if not used correctly, could lead to serious injury. For your safety, you must use any equipment shown in the workouts only as demonstrated, inspect any equipment prior to each use and refrain from using any equipment that appears damaged, worn or defective. For any equipment that requires an attachment, always use a secure, proper, and stable anchor. For exercises that require wrapping exercise bands around your body, make sure the bands are firmly secured to prevent slipping and injury. When performing exercises using a chair, make sure your chair is stable, strong enough to hold your weight and does not move. If you do not think you can safely perform exercises with your chair, you should use modified exercises to stay safe without use of the chair. Improper form or use of equipment can cause serious and permanent injury. Always wear proper footwear that allows you to maintain balance, provides for smooth, and supported movement, and avoid injuries, especially during exercises that may require walking, jumping, bending, twisting, turning, or pivoting. Always make sure your exercise area is clear of any obstacles including pets, children, other people, furniture, or equipment not currently in use. If you have any unique or special medical conditions, such as if you are pregnant, or if you have had or think you may have knee, ankle, shoulder or spinal (back or neck) problems, you must consult with a physician to understand all risks, contraindications and complications of using this program, and receive authorization from them before beginning. By using this program, you assume all dangers, hazards and risks of injury in the use of this program. Accordingly, to the extent permitted by law, Jaime Brenkus, Nestor Garcia, Evergreen Wellness LLC, Marketing In Color Inc., and all of their employees, owners, partners, or affiliates, will not be liable to any person or entity for any damage or loss caused or alleged to be caused directly or indirectly by any workout, nutrition plan, advice or other content. By clicking “Submit”, I acknowledge that I have read, understand, and agree with this warning.";