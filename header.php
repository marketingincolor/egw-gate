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
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.2/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
    <!-- SS DEV SITE TRACKING - app.myegw.com -->
    <?php // include './components/sharpspring-checker.php'; ?>
    <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-3QNIOMOC0E.marketingautomation.services/net']);
        _ss.push(['_setAccount', 'KOI-43TS5FVUQ0']);
        _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNIOMOC0E.marketingautomation.services/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
    </script>

    <!-- End SS DEV SITE TRACKING -->
	</head>
	<body class="<?php echo $body_class; ?>">
    
    <div class="top-bar-container">
      <div class="grid-container">
        <div class="grid-x">
          <div class="small-12 cell">
            <div class="top-bar fsres" style="background-color: #FFF">
              <div class="top-bar-left">
                <ul class="menu">
                  <li class="menu-text"><img src="<?php echo $logoPath; ?>" style="max-width:175px"></li>
                </ul>
              </div>
              <div class="top-bar-right">
                <ul class="menu">
                  <li><a href="#"><i class="fas fa-home"></i> &nbsp;Home</a></li>
                  <li><a href="#"><i class="fas fa-book-open"></i> &nbsp;About</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  