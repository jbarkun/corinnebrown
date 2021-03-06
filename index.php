<?php
$active = 'index';
$desc = "The Brown Design Group has created an impressive portfolio of work, including outstanding mountain vacation home interior design.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brown Design Group ASID, Inc.</title>

    <?php include('dependencies/header.php') ?>

</head>
<body class="page-index">
	
	<div class="wrapper wrapper-index text-center">
		<img id="index-logo" src="img/logo/logo-vert-white.png" alt="Brown Design Group Logo">
		<ul id="index-nav" class="nav nav-pills">
			<li><a href="portfolio.php">Portfolio</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="process.php">Process</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>

<?php include('dependencies/footer.php') ?>

<script type="text/javascript">

    jQuery(function($){
		
		$.supersized({
					  
			// Functionality
			slide_interval       :  4500,		// Length between transitions
			transition           :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	1400,		// Speed of transition
														
			// Components							
			slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides 					:  	[			// Slideshow Images
												{image : 'img/portfolio/baumer/bm04.jpg'},
												{image : 'img/portfolio/misc/bk1.jpg'},
												{image : 'img/portfolio/iantuono/ia08.jpg'},
												{image : 'img/portfolio/danhakl/dh03.jpg'},
												{image : 'img/portfolio/misc/dh01.jpg'},
												{image : 'img/portfolio/misc/dh02.jpg'},
										]
			
		});
		
		
    });

</script>
</body>
</html>