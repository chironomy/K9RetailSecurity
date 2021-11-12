<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
?>

<?php
	$email_from = 'info@k9retailsecurity.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                        "Here is the message:\n $message".
?>

<?php

  $to = "sam@therangeatlakenorman.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>






