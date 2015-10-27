<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brown Design Group</title>

    <? include('dependencies/files.php') ?>

</head>
<body>
<div id="content">
    <div id="logo_wrapper">
        <img id="index_logo" src="images/index_page/logo_4.png" alt="Brown Design Group Logo">
        <div id="index_menu">
            <ul class="nav nav-pills nav-justified">
                <li><a href="portfolio.php">PORTFOLIO</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="process.php">PROCESS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
</div>


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
                {image : 'images/index_page/bdr1.jpg'},
                {image : 'images/index_page/bk1.jpg'},
                {image : 'images/index_page/ia1.jpg'}
            ]
        });
    });

</script>
</body>
</html>