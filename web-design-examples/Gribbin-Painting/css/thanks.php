<?php
if (isset($_POST['send']))
{
	$to = 'tgribbinpainting@gmail.com';
	$subject = 'ESTIMATE REQUEST';
	$message = 'Name: ' . $_POST['user_name'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['user_email'] . "\r\n\r\n";
	$message .= 'Phone: ' . $_POST['user_phone'] . "\r\n\r\n";
	$message .= 'Web Links: ' . $_POST['web_links'] . "\r\n\r\n";
	$message .= 'Message: ' . $_POST['customer_input'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ($email) {
		$headers .= "\r\nReply-To: $email";
	}
	$headers = "From: CONTACT-FORM@gribbinpainting.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$success = mail($to, $subject, $message, $headers);
}
?>


<!DOCTYPE html>
<html>

<head>

<title>Gribbin Painting</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">


<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/thanks-style.css"/>
<link rel="stylesheet" type="text/css" href="css/thanks-responsive.css"/>


</head>

<body>

<div class="header">

<a href="index.html"><img id="logo" src="img/logo.png" alt="logo">
</a>
<img id="mobile-nav-button" src="img/mobile-nav-button.png" alt="mobile-nav-button">

<div class="desktop-nav">

<a href="index.html">
HOME
</a>

<a href="#services">
SERVICES
</a>

<a href="#contact">
CONTACT
</a>

</div> <!-- .desktop-nav -->

</div> <!-- .header -->

<div class="mobile-nav">

<a href="index.html">
HOME
</a>

<a href="#services">
SERVICES
</a>

<a href="#contact">
CONTACT
</a>

</div> <!-- .mobile-nav -->




<div class="message-confirmation">


<?php if (isset($success) && $success) { ?>
<h1>Thanks!</h1>
<p>Message Sent!</p>
<?php } else { ?>

<h1>Oops!</h1>
<p>There was an error.</p>

<?php } ?>

</div>


<footer>

<a href="">
<img src="img/" alt="">
</a>

<p>
&copy Gribbin Painting Inc. 2017
</p>


<div class="footer-nav">
<a href="index.html">HOME</a>
<a href="#services">SERVICES</a>
<a href="#contact">CONTACT</a>
</div>

</footer>


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>




