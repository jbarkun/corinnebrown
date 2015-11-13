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
				<div class="row">
					<div class="col-sm-12">
						<h1>Bishop</h1>
						<h2>McCoy</h2>
						<p>Lesley Allen Photograpy</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

	 jQuery(function($){
		
			$.backstretch([
					"img/portfolio/mccoy-bishop/mc_1.jpg"
				 , "img/portfolio/mccoy-bishop/mc_2.jpg"
				 , "img/portfolio/mccoy-bishop/mc_3.jpg"
				 , "img/portfolio/mccoy-bishop/mc_p.jpg"
			  ], {duration: 3000, fade: 1400}
			);
		  
			$("#nav-next").click(function(){
				 $('body').backstretch("next");
			 });
			
			$("#nav-prev").click(function(){
				 $('body').backstretch("prev");
			 });
			
			$("#nav-play").click(function(){
				 if ($('#nav-play').hasClass('paused')) {
					$('body').backstretch("resume");
				 } else {
					$('body').backstretch("pause");
				 }
				 $("#nav-play").toggleClass( "paused" );
			 });
			
			$("#nav-toggle").click(function(){
				 $(".slideshow-nav").toggleClass( "tray-hidden" );
			 });
		});

</script>
	 
</body>
</html>