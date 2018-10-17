<?php 
/**
 * Keycheck component for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$fsrKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$cgKeys = array('cg0001', 'cg0002', 'cg0003', 'cg0004', 'cg0005', 'cg0006', 'cg0007');

//$passKeys = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005', 'cg0001', 'cg0002', 'cg0003', 'cg0004', 'cg0005', 'cg0006', 'cg0007');
$passKeys = array_merge($fsrKeys, $cgKeys);

$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
// Redirect if there is no saved passkey to the ENTRY screen

// Set the "is_" variable specific to the location key saved
$is_fsr = strpbrk($savedKey, 'fsr');
$is_cg = strpbrk($savedKey, 'cg');
