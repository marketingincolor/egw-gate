<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
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

if( !in_array($savedKey, $passKeys) ) {
		header('Location: /egw-gate/');
	}



$pageTitle = 'Products - First Service Residential';
?>
<?php include 'header.php';?>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<h1>Products</h1>
		</div>
		<div class="grid-x grid-margin-x">This is the main body of the Products page</div>
		<div class="grid-x grid-margin-x">This is the footer of the Products page</div>
	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>