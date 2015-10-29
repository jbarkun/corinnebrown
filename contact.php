<?php $active = 'contact' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact &ndash; Corinne Brown ASID Inc.</title>
    <?php include('dependencies/header.php') ?>
</head>
<body class="page-contact">
	<?php include('dependencies/navigation_menu.php') ?>

	<div class="wrapper wrapper-contact">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 contact-content">
				
				<img id="contact-logo" src="img/logo/logo-box-brown.png" alt="Corinne Brown Logo" />
				<p>
					The Brown Design Group <br />
					3 Oak Tree Way <br />
					Mammoth Lakes, CA 93546
				</p>

				<p>
					Mailing address: <br />
					P.O. Box 100, PMB 332 <br />
					Mammoth Lakes, CA 93546-100
				</p>

				<p>
					tel. 760 934 5545 <br />
					fax. 760 934 5497
				</p>
				<h2><a href="mailto:julie@designbdg.com">julie@designbdg.com</a></h2>
				
				<h1>Connect with us</h1>
				<div class="contact-sm">
					<a href="http://www.houzz.com/badges/user/corinnebrown" target="blank" title="Find us on Houzz"><i class="fa fa-houzz"></i></a>
					<a href="https://www.facebook.com/corinne.brown.777?fref=nf" target="blank" title="Like us on Facebook"><i class="fa fa-facebook"></i></a>
					<a href="https://www.linkedin.com/in/corinnebrown1" target="blank" title="Connect on Linkedin"><i class="fa fa-linkedin"></i></a>
				</div>
				
			</div>
		</div>
	</div>

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

    jQuery(function($){
        $.supersized({

            //Functionality
            slide_interval          :   4900,		// Length between transitions
            transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	1400,		// Speed of transition

            // Components
            slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides 					:  	[			// Slideshow Images
                {image : 'img/contact/bg_contact.jpg'}
            ]
        });
    });

</script>
	 
</body>
</html>