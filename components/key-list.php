<?php

  $fsrKeys    = array('fsr001', 'fsr002', 'fsr003', 'fsr004', 'fsr005');
  $cgKeys     = array('cg0001', 'cg0002', 'cg0003', 'cg0004', 'cg0005', 'cg0006', 'cg0007');
  $pOaksKeys  = ['po001','po002','po003','po004','po005'];
  $mGroveKeys = ['mg001','mg002','mg003','mg004','mg005'];

  $passKeys = array_merge($fsrKeys, $cgKeys, $pOaksKeys, $mGroveKeys);

  if (isset($_POST['passcode'])) {
    if (!in_array($_POST['passcode'], $passKeys)) {
      echo 'False';
    }else{
      echo 'True';
    }
  }
