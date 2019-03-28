<?php 
/**
 * Keycheck component for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
$fsrKeys    = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
$cgKeys     = array('cg0001', 'cg0002', 'cg0003', 'cg0004', 'cg0005', 'cg0006', 'cg0007');
$pOaksKeys  = ['po001','po002','po003','po004','po005'];
$mGroveKeys = ['mg001','mg002','mg003','mg004','mg005'];

$passKeys = array_merge($fsrKeys, $cgKeys, $pOaksKeys, $mGroveKeys);

$savedKey = ( isset($_COOKIE["gatekey"]) ? $_COOKIE["gatekey"] : 'unknown' );
// Redirect if there is no saved passkey to the ENTRY screen

// Set the "is_" variable specific to the location key saved
$is_fsr    = strpbrk($savedKey, 'fsr');
$is_poaks  = strpbrk($savedKey, 'po');
$is_mgrove = strpbrk($savedKey, 'mg');
$is_cg     = strpbrk($savedKey, 'cg');
