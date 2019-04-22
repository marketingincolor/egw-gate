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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
      /* ==== REVEAL REPAIR ==== */
      html.is-reveal-open {
      overflow: visible !important;
      }
      .reveal-overlay {
      overflow: hidden;
      }
      html,body{
      -webkit-overflow-scrolling : touch !important;
      }
    </style>
		<link rel="stylesheet" href="style.css">
    <!-- SS DEV SITE TRACKING - app.myegw.com -->
    <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-3QMYANU21K.marketingautomation.services/net']);
        _ss.push(['_setAccount', 'KOI-440IVKE05K']);
        _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QMYANU21K.marketingautomation.services/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
    </script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W5P43V8');</script>
<!-- End Google Tag Manager -->
    <!-- End SS DEV SITE TRACKING -->
	</head>
	<body class="<?php echo $body_class; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5P43V8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php
      if (strpos($body_class, 'loggedin') !== false){
        $home_link = '/home';
      }else{
        $home_link = '/';
      }
    ?>
    
    <div class="top-bar-container">
      <div class="grid-container">
        <div class="grid-x">
          <div class="small-12 cell">
            <div class="top-bar fsres" style="background-color: #FFF">
              <div class="top-bar-left">
                <ul class="menu">
                  <li class="menu-text"><a href="<?php echo $home_link; ?>"><img src="images/fsr-logo-horizontal.png" style="max-width:175px"></a></li>
                </ul>
              </div>
              <div class="top-bar-right">
                <ul class="menu">
                  <li><a href="/home"><i class="fas fa-home"></i> &nbsp;Home</a></li>
                  <li><a href="/about"><i class="fas fa-book-open"></i> &nbsp;About</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  