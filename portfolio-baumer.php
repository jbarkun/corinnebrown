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
						<h1>Mammoth Lakes</h1>
						<h2>Baumer</h2>
						<p>Leslie Allen Photography</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

	    jQuery(function($){
		
			$.backstretch([
					"img/portfolio/baumer-mammoth-lakes/bb3.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bb4.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bb5.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bb6.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bd1.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bdr1.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bfr1.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bfr3.jpg"
				 , "img/portfolio/baumer-mammoth-lakes/bk1.jpg"
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