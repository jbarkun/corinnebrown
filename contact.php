<?php
session_start();
$active = 'contact';
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

	<div class="wrapper wrapper-contact_form">
		<div class="row">
			<form action="dependencies/sendemail.php" method="post">
				<input type="text" name="name" placeholder="Your Name" value="<? if(isset($_SESSION['input']['name'])){echo $_SESSION['input']['name'];} ?>">
				<input type="email" name="email" placeholder="Your Email Address" value="<? if(isset($_SESSION['input']['email'])){echo $_SESSION['input']['email'];} ?>">
				<input type="text" name="title" placeholder="Message Title" value="<? if(isset($_SESSION['input']['title'])){echo $_SESSION['input']['title'];} ?>">
				<textarea name="message" cols="30" rows="10" placeholder="Please type your message here"><? if(isset($_SESSION['input']['message'])){echo $_SESSION['input']['message'];} ?></textarea>
				<? if(isset($_SESSION['input'])){
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

    <?php include('dependencies/footer.php') ?>
	 
	 <script type="text/javascript">

	     jQuery(function($){
				$.backstretch("img/contact/bg_contact.jpg");
			});

</script>
	 
</body>
</html>