
<?php
if (!isset($_POST['submit'])) {
   echo "<h1>Error</h1>\n
      <p>Accessing this page directly is not allowed.</p>";
   exit;
}

$email = preg_replace("([\r\n])", "", $email);

$find = "/(content-type|bcc:|cc:)/i";
if (preg_match($find, $name) || preg_match($find, $email) || preg_match($find, $url) || preg_match($find, $comments)) {
   echo "<h1>Error</h1>\n
      <p>No meta/header injections, please.</p>";
   exit;
}
?>

<?php 
// $inputname = $_POST['inputname'];
// $inputemail = $_POST['inputemail'];
$inputsubject = $_POST['inputsubject'];
$inputmessage = $_POST['inputmessage'];

if(empty($inputmessage)) {
	?>
<script>window.location.href = 'contact.php';</script>
	<?php 
}
else {
	$to = "moling@molingguo.com";
	$subject = "<From Moling's Website> ".$inputsubject;
	$message = $inputmessage;
	// $from = $inputemail;
	// $message .= "\n\nFrom: ".$inputname."\n";
	// $message .= "Email: ".$from."\n";
	$headers = "From: moling@molingguo.com\r\n";
	$headers .= "Reply-To: info@molingguo.com\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();
	mail($to,$subject,$message,$headers);
}
?>

<script>
	alert("Successful! Thank you!");
	window.location.href = 'contact.php';
</script>