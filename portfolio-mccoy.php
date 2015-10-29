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
				<h1>Bishop</h1>
				<h2>McCoy</h2>
				<p>Lesley Allen Photograpy</p>
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
                {image : 'img/portfolio/mccoy-bishop/mc_1.jpg'},
                {image : 'img/portfolio/mccoy-bishop/mc_2.jpg'},
                {image : 'img/portfolio/mccoy-bishop/mc_3.jpg'},
                {image : 'img/portfolio/mccoy-bishop/mc_p.jpg'},
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