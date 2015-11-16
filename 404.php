<?php
session_start();
$active = '404';
$desc = "The Brown Design Group has created an impressive portfolio of work, including outstanding mountain vacation home interior design.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Not Found &ndash; Corinne Brown ASID Inc.</title>

    <?php include('dependencies/header.php') ?>
</head>
<body class="page-contact">
<?php include('dependencies/navigation_menu.php') ?>

<div class="wrapper wrapper-contact">
    <div class="row">
        <div class="col-md-12 contact-content">

            <img id="contact-logo" src="img/logo/logo-box-brown.png" alt="Corinne Brown Logo"/>

            <h1>Page Not Found</h1>
				<p>We're sorry, but this page doesn't exist.</p>
            <h2><a href="index.php">Back to Home</a></h2>

        </div>
    </div>
</div>


<?php include('dependencies/footer.php') ?>

<script type="text/javascript">
    jQuery(function ($) {
		
		$.supersized({
					  
			// Functionality
			slide_interval       :  4500,		// Length between transitions
			transition           :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	1400,		// Speed of transition
														
			// Components							
			slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides 					:  	[			// Slideshow Images
												{image : 'img/contact/bg_contact.jpg'}
										]
			
		});
		
    });
</script>

</body>
</html>