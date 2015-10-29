<?php $active = 'index' ?>
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
		
		$.backstretch([
				"img/portfolio/baumer-mammoth-lakes/bdr1.jpg"
			 , "img/portfolio/other/bk1.jpg"
			 , "img/portfolio/iantuono-mammoth-lakes/ia1.jpg"
		  ], {duration: 4900, fade: 1400}
		);
		
    });

</script>
</body>
</html>