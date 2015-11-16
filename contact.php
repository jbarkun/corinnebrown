<?php
session_start();
$active = 'contact';
$desc = "Contact The Brown Design Group to learn more about how we can design your dream home.";
?>
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
        <div class="col-md-6 contact-content">

            <img id="contact-logo" src="img/logo/logo-box-brown.png" alt="Corinne Brown Logo"/>

            <p>
                <strong>The Brown Design Group</strong> <br/>
                3 Oak Tree Way <br/>
                Mammoth Lakes, CA 93546
            </p>

            <p>
                <strong>Mailing address</strong> <br/>
                P.O. Box 100, PMB 332 <br/>
                Mammoth Lakes, CA 93546-100
            </p>

            <p>
                tel. 760 934 5545 <br/>
                fax. 760 934 5497
            </p>

            <h2><a href="mailto:julie@designbdg.com">contact@designbdg.com</a></h2>

            <h1>Connect with us</h1>

            <div class="contact-sm">
                <a href="http://www.houzz.com/badges/user/corinnebrown" target="blank" title="Find us on Houzz"><i
                        class="fa fa-houzz"></i></a>
                <a href="https://www.facebook.com/corinne.brown.777?fref=nf" target="blank" title="Like us on Facebook"><i
                        class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/corinnebrown1" target="blank" title="Connect on Linkedin"><i
                        class="fa fa-linkedin"></i></a>
            </div>

        </div>
        <div class="col-md-6">
            <div class="wrapper wrapper-contact_form">
                <form id="contactForm" action="dependencies/sendemail.php" method="post">
                    <fieldset>
								<input type="text" id="name" name="name" placeholder="Your Name"
                           value="<? if (isset($_SESSION['input']['name'])) {
                               echo $_SESSION['input']['name'];
                           } ?>">
							</fieldset>
						  <fieldset>
								<input type="email" id="email" name="email" placeholder="Your Email Address"
                           value="<? if (isset($_SESSION['input']['email'])) {
                               echo $_SESSION['input']['email'];
                           } ?>">
						  </fieldset>
						  <fieldset>
								<input type="text" id="title" name="title" placeholder="Message Title"
                           value="<? if (isset($_SESSION['input']['title'])) {
                               echo $_SESSION['input']['title'];
                           } ?>">
						  </fieldset>
							<fieldset>
									<textarea id="message" name="message" cols="30" rows="5"
									placeholder="Please type your message here"><? if (isset($_SESSION['input']['message'])) {
									echo $_SESSION['input']['message'];
            } ?></textarea>
							</fieldset>
                    <? if (isset($_SESSION['input'])) {
                        unset($_SESSION['input']);
                    } ?>
                    <div class="g-recaptcha" data-sitekey="6LfLKRATAAAAAJ8_MVDiwCrEWsXvLypyZw0RwkXb"></div>
                    <input type="submit" value="Send Message">
                </form>
                <? if (isset($_SESSION['message'])): ?>
                    <p style="color: red"><? echo $_SESSION['message'] ?></p>
                    <? unset($_SESSION['message']) ?>
                <? endif ?>
            </div>
        </div>
    </div>
</div>



<!--	Form Validation-->
<script>
    $('#contactForm').validate({
        debug: false,

        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            title: {
                required: true
            },
            message: {
                required: true
            }
        },

        messages: {
            name: {
                required: "Please enter your name."
            },
            email: {
                required: "Please enter your email address."
            },
            title: {
                required: "Please enter the subject."
            },
            message: {
                required: "Please write your message."
            }
        }
    });
</script>

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