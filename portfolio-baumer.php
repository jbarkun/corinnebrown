<?php $active = 'portfolio' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio &ndash; Corinne Brown ASID Inc.</title>
    <?php include('dependencies/header.php') ?>
</head>
<body class="page-portfolio-inner">
	<?php include('dependencies/navigation_menu.php') ?>

	
	
	<div class="slideshow-nav tray-hidden">
		<div class="wrapper">
			<ul>
				<li id="nav-toggle"></li>
				<li id="nav-play"></li>
				<li id="nav-prev"></li>
				<li id="nav-next"></li>
			</ul>
		</div>
		<div class="slideshow-tray">
			<div class="wrapper">
				<h1>Mammoth Lakes</h1>
				<h2>Baumer</h2>
				<p>Leslie Allen Photography</p>
			</div>
		</div>
	</div>
	
	

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

    jQuery(function($){
        $.supersized({

            //Functionality
            slide_interval          :   3000,		// Length between transitions
            transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	1400,		// Speed of transition

            // Components
            slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides 					:  	[			// Slideshow Images
                {image : 'img/portfolio/baumer-mammoth-lakes/bb3.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bb4.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bb5.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bb6.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bd1.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bdr1.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bfr1.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bfr3.jpg'},
                {image : 'img/portfolio/baumer-mammoth-lakes/bk1.jpg'},
            ]
        });
		  
		  $("#nav-next").click(function(){
				api.nextSlide();
			});
		  
		  $("#nav-prev").click(function(){
				api.prevSlide();
			});
		  
		  $("#nav-play").click(function(){
				api.playToggle();
				$("#nav-play").toggleClass( "paused" );
			});
		  
		  $("#nav-toggle").click(function(){
				$(".slideshow-nav").toggleClass( "tray-hidden" );
			});
    });

</script>
	 
</body>
</html>