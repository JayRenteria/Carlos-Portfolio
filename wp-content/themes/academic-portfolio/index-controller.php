<?php
require_once("Mail.php");
try {
	if(!@isset($_POST['name']) || !@isset($_POST['email']) || !@isset($_POST['message'])) {
		throw new Exception('Form incomplete');
	}
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	if($name === "" || strpos($_POST['name'], "<script>") !== false) {
		$name = "Loser at " . $_SERVER['REMOTE_ADDR'];
	}
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	$website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
	$website = filter_var($website, FILTER_VALIDATE_URL);
	$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	if($message === "" || strpos($_POST['message'], "<script>") !== false) {
		$message = "Someone is trying to screw with you guys. Check the following IP address: " . $_SERVER['REMOTE_ADDR'];
	}
	// email the user with an activation message
	$to = "jay@jayrenteria.com";
	$from = $email;
	// build headers
	$headers = array();
	$headers["To"] = $to;
	$headers["From"] = $from . "at" . $website;
	$headers["Reply-To"] = $from;
	$headers["Subject"] = "Carlos M. Indacochea Contact Form";
	$headers["MIME-Version"] = "1.0";
	$headers["Content-Type"] = "text/html; charset=UTF-8";
	$message = <<< EOF
	<html>
		<body>
		<p>{$message}</p>
		<br>
		<p>{$name}</p>
		</body>
	</html>
EOF;
	// send the email
	error_reporting(E_ALL & ~(E_STRICT | E_NOTICE | E_DEPRECATED));
	$mailer =& Mail::factory("sendmail");
	$status = $mailer->send($to, $headers, $message);
	if(PEAR::isError($status) === true)
	{
		echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to send message:" . $status->getMessage() . "</div>";
	}
	else
	{
		echo "<div class=\"alert alert-success\" role=\"alert\">Sent!</div>";
	}
} catch(Exception $exception) {
	echo "<p class=\"alert alert-danger\" role=\"alert\">Exception: " . $exception->getMessage() . "</p>";
}
?>