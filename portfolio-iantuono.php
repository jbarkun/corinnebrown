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
				<h2>Iantuono</h2>
				<p>Applied Photography</p>
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
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia1.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia2.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia3.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia4.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia5.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia6.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia7.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia8.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia9.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia10.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia11.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia12.jpg'},
                {image : 'img/portfolio/iantuono-mammoth-lakes/ia13.jpg'},
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