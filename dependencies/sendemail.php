<?php
/*
 * Make sure server only handles POST request
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../contact.php');
}

session_start();
require_once __DIR__ . '/vendor/autoload.php';

/*
 * Validate user input
 */
use Respect\Validation\Validator as validator;

foreach($_POST as $key => $value){
    if (strlen($value) <= 0){
        $_SESSION['message'] = 'Please enter all required fields';
        $_SESSION['input'] = $_POST;
        header('location: ../contact.php');
        exit;
    }
}

$emailValid = validator::email()->validate($_POST['email']);

if (!$emailValid){
    $_SESSION['message'] = 'Please enter a valid email address';
    $_SESSION['input'] = $_POST;
    header('location: ../contact.php');
    exit;
};


/*
 * Validate Google reCaptcha
 */
$recaptcha = new \ReCaptcha\ReCaptcha('6LfLKRATAAAAAGgMk7-CDn62De5R-afRGmTuNNpC');

$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()) {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'boris@ankitdesigns.com';
    $mail->Password = 'secret';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['name'];
    $mail->addAddress('boris@ankitdesigns.com');
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->isHTML(true);

    $mail->Subject = 'New Message from CorinneBrownASID.com';
    $mail->Body = 'From: ' . $_POST['name'] . ' ' . $_POST['email'] . '<br/>' . 'Subject: ' . $_POST['title'] . '<br/>' . $_POST['message'];

    if (!$mail->send()) {
        $_SESSION['message'] = 'The message could not be sent. Please try again';
        $_SESSION['input'] = $_POST;
        header('location: ../contact.php');
    } else {
        $_SESSION['message'] = 'The message is successfully sent';
        header('location: ../contact.php');
    }
} else {
    $errors = $resp->getErrorCodes();
    $_SESSION['message'] = 'Something wrong happened with the reCaptcha. Please try again';
    $_SESSION['input'] = $_POST;
    header('location: ../contact.php');
}