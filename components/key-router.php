<?php
  // This will check the user's saved key and route them to the proper community page
if (isset($userKey)) {
  if( in_array($userKey, $pOaksKeys) ) { 
    header('Location: ./pleasant-oaks');
  }else if( in_array($userKey, $mGroveKeys) ) { 
    header('Location: ./maple-grove');
  }
}
if (isset($savedKey)) {
  if( in_array($savedKey, $pOaksKeys) ) { 
    header('Location: ./pleasant-oaks');
  }else if( in_array($savedKey, $mGroveKeys) ) { 
    header('Location: ./maple-grove');
  }
}