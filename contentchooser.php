<?php
/* Content chooser */
function selectData($selector) {
	switch ($selector) :
		case 'fsr001' :
			return array(
				'master' => 'fsres',
				'locationTitle' => 'Clearwater', 
				'logoPath' => './images/fsr-logo.svg', 
				'companyName' => 'First Service Residential'
			);
		case 'fsr002' :
			return array(
				'master' => 'fsres',
				'locationTitle' => 'Destin', 
				'logoPath' => './images/fsr-logo.svg', 
				'companyName' => 'First Service Residential'
			);
		case 'fsr003' :
			return array(
				'master' => 'fsres',
				'locationTitle' => 'Jacksonville', 
				'logoPath' => './images/fsr-logo.svg', 
				'companyName' => 'First Service Residential'
			);
		case 'fsr004' :
			return array(
				'master' => 'fsres',
				'locationTitle' => 'Miami', 
				'logoPath' => './images/fsr-logo.svg', 
				'companyName' => 'First Service Residential'
			);
		default :
			return array(
				'master' => 'gateway',
				'locationTitle' => 'Location', 
				'logoPath' => './images/fsr-logo.svg', 
				'companyName' => 'First Service Residential'
			);
	endswitch;
}
$buildArray = selectData($savedKey);
$master = $buildArray['master'];
$locationTitle = $buildArray['locationTitle'];
$logoPath = $buildArray['logoPath'];
$company = $buildArray['companyName'];