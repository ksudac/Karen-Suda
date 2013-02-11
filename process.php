<?php
	if(isset($_POST['email'])) {
     
    $email_to = "ksudac@gmail.com";
    $email_subject = "karensuda.com Newsletter Request";
     
    $email_from = $_POST['email']; 

    

    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Email: ".clean_string($email_from)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

}

	print "Your email address <b>".$_POST['email']."</b> has been submitted successfully<br>";
?>