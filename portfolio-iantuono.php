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
		
			$.backstretch([
					"img/portfolio/iantuono-mammoth-lakes/ia.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia1.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia2.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia3.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia4.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia5.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia6.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia7.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia8.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia9.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia10.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia11.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia12.jpg"
				 , "img/portfolio/iantuono-mammoth-lakes/ia13.jpg"
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