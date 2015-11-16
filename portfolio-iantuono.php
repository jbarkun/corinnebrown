<?php
$active = 'portfolio';
$desc = "View The Brown Design Group's Iantuono project at Mammoth Lakes.";
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
						<h1>Mammoth Lakes</h1>
						<h2>Iantuono</h2>
						<p>Applied Photography</p>
					</div>
				</div>
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
													{image : 'img/portfolio/iantuono/ia01.jpg'},
													{image : 'img/portfolio/iantuono/ia02.jpg'},
													{image : 'img/portfolio/iantuono/ia03.jpg'},
													{image : 'img/portfolio/iantuono/ia04.jpg'},
													{image : 'img/portfolio/iantuono/ia05.jpg'},
													{image : 'img/portfolio/iantuono/ia06.jpg'},
													{image : 'img/portfolio/iantuono/ia07.jpg'},
													{image : 'img/portfolio/iantuono/ia08.jpg'},
													{image : 'img/portfolio/iantuono/ia09.jpg'},
													{image : 'img/portfolio/iantuono/ia10.jpg'},
													{image : 'img/portfolio/iantuono/ia11.jpg'},
													{image : 'img/portfolio/iantuono/ia12.jpg'},
													{image : 'img/portfolio/iantuono/ia13.jpg'},
													{image : 'img/portfolio/iantuono/ia14.jpg'},
													{image : 'img/portfolio/iantuono/ia15.jpg'},
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