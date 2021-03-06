<?php

if ($active == '404') {
	$rootURL = 'http://www.corinnebrownasid.com/';
}

?>


<meta name="description" content="<?php echo $desc ?>">
<meta name="keywords" content="<?php if(isset($keywords)) {echo $keywords;} else { echo("Corinne Brown, Brown Design Group, The Finishing Touch, Corinne Brown ASID Inc., Mammoth Lakes Interior Designer, Interior Design, Interior Design Mammoth Lakes, Interior Design Mono County");} ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Facebook Open Graph -->
<meta property="og:title" content="The Brown Design Group" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php if(isset($ogImg)) {echo $ogImg;} else { echo("http://www.corinnebrownasid.com/img/og/main.jpg");} ?>" />
<meta property="og:description" content="<?php echo $desc ?>" />

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootURL; ?>favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo $rootURL; ?>favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo $rootURL; ?>favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo $rootURL; ?>favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo $rootURL; ?>favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo $rootURL; ?>favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo $rootURL; ?>favicons/manifest.json">
<link rel="mask-icon" href="<?php echo $rootURL; ?>favicons/safari-pinned-tab.svg" color="#8c7f79">
<link rel="shortcut icon" href="<?php echo $rootURL; ?>favicons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="Corinne Brown Design Group">
<meta name="application-name" content="Corinne Brown Design Group">
<meta name="msapplication-TileColor" content="#755546">
<meta name="msapplication-TileImage" content="<?php echo $rootURL; ?>favicons/mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo $rootURL; ?>favicons/browserconfig.xml">
<meta name="theme-color" content="#8c7f79">


<!-- CSS Files -->
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Fonts & Icons -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Supersized -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.supersized@3.2.7(slideshow/css/supersized.css+slideshow/theme/supersized.shutter.css)">

<!--Customized Style Sheet-->
<link rel="stylesheet" href="<?php echo $rootURL; ?>css/style.css">


<!-- Javascript to be initialized before <body> -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Modernizr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<? if ($active == 'contact'): ?>
<!--Google reCaptcha-->
<script src='https://www.google.com/recaptcha/api.js'></script><!--remove hl=fr-CA to turn back to English-->
<!--jQuery Validator-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<? endif; ?>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63384112-9', 'auto');
  ga('send', 'pageview');

</script>