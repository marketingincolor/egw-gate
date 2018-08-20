<?php
/**
 * Header component for gateway system.
 *
 */
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/css/foundation.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="<?php echo $master; ?>">
	<div class="grid-container fluid header">
		<div class="grid-x">
			<div class="grid-container">
				<div class="grid-x grid-margin-x align-middle">
					<div class="cell small-2">
						<img src="<?php echo $logoPath; ?>">
					</div>
					<div class="cell auto">
						<h1><?php echo $locationTitle;?> &mdash; Activity Programs</h1>
					</div>
				</div>
			</div>
		</div>
	</div>