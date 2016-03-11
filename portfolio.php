<?php
$active = 'portfolio';
$desc = "View The Brown Design Group's portfolio of outstanding interior design.";
$keywords = "rustic interior design, rustic, mountain design, mountain home, classic interior design, houzz designer, second home,vacation home, ski home, Professional interior designer, Professional Interior decorator, ASID";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brown Design Group - Portfolio</title>

    <?php include('dependencies/header.php') ?>
</head>
<body class="page-portfolio">
	
	<?php include('dependencies/navigation_menu.php') ?>
	
	<div class="wrapper">
		<div class="row">
			
			<!-- Portfolio Item 1 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					 <img class="img-responsive" src="img/portfolio/cover/baumer.jpg" alt="Mammoth Lakes">
					 <div class="overlay">
						 <h2>Baumer <span class="small">Mammoth Lakes, CA</span></h2>
						 <a class="info" href="portfolio-baumer.php">View</a>
					 </div>
				</div>
		  </div>
			
			<!-- Portfolio Item 2 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					 <img class="img-responsive" src="img/portfolio/cover/iantuono.jpg" alt="Mammoth Lakes">
					 <div class="overlay">
						 <h2>Iantuono <span class="small">Mammoth Lakes, CA</span></h2>
						 <a class="info" href="portfolio-iantuono.php">View</a>
					 </div>
				</div>
		  </div>
			
			<!-- Portfolio Item 3 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					 <img class="img-responsive" src="img/portfolio/cover/mccoy.jpg" alt="Bishop">
					 <div class="overlay">
						 <h2>McCoy <span class="small">Bishop, CA</span></h2>
						 <a class="info" href="portfolio-mccoy.php">View</a>
					 </div>
				</div>
		  </div>
			
			<!-- Portfolio Item 4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					 <img class="img-responsive" src="img/portfolio/cover/martis.jpg" alt="Lake Tahoe">
					 <div class="overlay">
						 <h2>Danhakl, Martis Camp <br /> <span class="small">Tahoe, CA</span></h2>
						 <a class="info" href="portfolio-danhakl.php">View</a>
					 </div>
				</div>
		  </div>
			
			<!-- Portfolio Item 5 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect coming-soon">
					 <img class="img-responsive" src="img/portfolio/cover/mccall.jpg" alt="Idaho">
					 <div class="overlay">
						 <h2>Danhakl <span class="small">McCall, ID</span></h2>
						 <a class="info" href="#">Coming Soon</a>
					 </div>
				</div>
		  </div>
			
			<!-- Portfolio Item 7 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect coming-soon">
					 <img class="img-responsive" src="img/portfolio/cover/palmdesert.jpg" alt="Rancho Mirage">
					 <div class="overlay">
						 <h2>Frerichs <span class="small">Rancho Mirage, CA</span></h2>
						 <a class="info" href="#">Coming Soon</a>
					 </div>
				</div>
		  </div>
					  

			
			
			
			
		</div> <!-- /row -->
	</div> <!-- /wrapper -->
	

    <?php include('dependencies/footer.php') ?>
	 

</body>
</html>