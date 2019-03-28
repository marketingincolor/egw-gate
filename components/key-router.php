<?php
  // This will check the user's saved key and route them to the proper community page
  if( in_array($savedKey, $pOaksKeys) ) { 
    header('Location: ./pleasant-oaks');
  }else if( in_array($savedKey, $mGroveKeys) ) { 
    header('Location: ./maple-grove');
  }