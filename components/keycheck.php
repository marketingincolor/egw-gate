<?php 
/**
 * Keycheck component for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
include 'key-list.php';

$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
// Redirect if there is no saved passkey to the ENTRY screen

// Set the "is_" variable specific to the location key saved
$is_fsr    = strpbrk($savedKey, 'fsr');
$is_poaks  = strpbrk($savedKey, 'po');
$is_mgrove = strpbrk($savedKey, 'mg');
$is_cg     = strpbrk($savedKey, 'cg');
