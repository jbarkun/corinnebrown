<?php
session_start();
$active = '404';
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
        $.backstretch("img/contact/bg_contact.jpg");
    });
</script>

</body>
</html>