<?php
$active = 'portfolio';
$desc = "View The Brown Design Group's Danhakl project.";
?>
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
				<div class="row">
					<div class="col-sm-12">
						<h1>Location</h1>
						<h2>Danhakl</h2>
						<p>Photography Credit</p>
					</div>
				</div>
			</div>
			<div id="thumb-tray" class="load-item">
				<div id="thumb-back"></div>
				<div id="thumb-forward"></div>
			</div>
		</div>
	</div>
	
	

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

		jQuery(function($){
		  
			  $.supersized({
					  
				  // Functionality
				  slide_interval       :  3000,		// Length between transitions
				  transition           :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
				  transition_speed		:	700,		// Speed of transition
															  
				  // Components							
				  slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
				  slides 					:  	[			// Slideshow Images
													  {image : 'img/portfolio/danhakl/dh01.jpg'},
													  {image : 'img/portfolio/danhakl/dh02.jpg'},
													  {image : 'img/portfolio/danhakl/dh03.jpg'},
													  {image : 'img/portfolio/danhakl/dh03a.jpg'},
													  {image : 'img/portfolio/danhakl/dh03b.jpg'},
													  {image : 'img/portfolio/danhakl/dh04.jpg'},
													  {image : 'img/portfolio/danhakl/dh05.jpg'},
													  {image : 'img/portfolio/danhakl/dh06.jpg'},
													  {image : 'img/portfolio/danhakl/dh07.jpg'},
													  {image : 'img/portfolio/danhakl/dh07a.jpg'},
													  {image : 'img/portfolio/danhakl/dh08.jpg'},
													  {image : 'img/portfolio/danhakl/dh09.jpg'},
													  {image : 'img/portfolio/danhakl/dh10.jpg'},
													  {image : 'img/portfolio/danhakl/dh11.jpg'},
													  {image : 'img/portfolio/danhakl/dh12.jpg'},
													  {image : 'img/portfolio/danhakl/dh12a.jpg'},
													  {image : 'img/portfolio/danhakl/dh13.jpg'},
													  {image : 'img/portfolio/danhakl/dh13a.jpg'},
													  {image : 'img/portfolio/danhakl/dh13b.jpg'},
													  {image : 'img/portfolio/danhakl/dh14.jpg'},
													  {image : 'img/portfolio/danhakl/dh15.jpg'},
													  {image : 'img/portfolio/danhakl/dh15a.jpg'},
													  {image : 'img/portfolio/danhakl/dh16.jpg'},
													  {image : 'img/portfolio/danhakl/dh17.jpg'},
													  {image : 'img/portfolio/danhakl/dh18.jpg'},
													  {image : 'img/portfolio/danhakl/dh19.jpg'},
													  {image : 'img/portfolio/danhakl/dh20.jpg'},
													  {image : 'img/portfolio/danhakl/dh21.jpg'},
													  {image : 'img/portfolio/danhakl/dh21a.jpg'},
													  {image : 'img/portfolio/danhakl/dh22.jpg'},
													  {image : 'img/portfolio/danhakl/dh23.jpg'},
													  {image : 'img/portfolio/danhakl/dh24.jpg'},
													  {image : 'img/portfolio/danhakl/dh25.jpg'},
													  {image : 'img/portfolio/danhakl/dh26.jpg'},
													  {image : 'img/portfolio/danhakl/dh27.jpg'},
													  {image : 'img/portfolio/danhakl/dh28.jpg'},
													  {image : 'img/portfolio/danhakl/dh29.jpg'},
													  {image : 'img/portfolio/danhakl/dh30.jpg'},
													  {image : 'img/portfolio/danhakl/dh31.jpg'},
													  {image : 'img/portfolio/danhakl/dh32.jpg'},
													  {image : 'img/portfolio/danhakl/dh33.jpg'},
													  {image : 'img/portfolio/danhakl/dh34.jpg'},
													  {image : 'img/portfolio/danhakl/dh35.jpg'},
													  {image : 'img/portfolio/danhakl/dh36.jpg'},
													  {image : 'img/portfolio/danhakl/dh37.jpg'},
													  {image : 'img/portfolio/danhakl/dh38.jpg'},
													  {image : 'img/portfolio/danhakl/dh39.jpg'},
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