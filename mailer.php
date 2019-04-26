<?php
 
$youremail = "yourEmailAddress@email.com";
 
@extract($_POST);
$name = filter_var($name, FILTER_SANITIZE_STRING);
$msg  = filter_var($msg, FILTER_SANITIZE_STRING);
$phone  = filter_var($phone, FILTER_SANITIZE_STRING);
header( "refresh:5;url=http://www.jlrwebdesign.com.au/test/shirley-marriage/contact.html" );
 
if (filter_var($email, FILTER_VALIDATE_EMAIL) || ($phone != '')) {
    if (mail($youremail, "Message from $name via Shirley's Marriage Ceremonies.", "$msg. This message was from $name. Phone: $phone Email: $email", "From: Shirley <$name><$email>")) {
        echo "Your message was sent. Thank you $name, for your enquiry. You will be redirected back to the home page in five seconds.";
 
        $autoreply = "Thank you for enquiring at Shirley's Marriage Ceremonies";
        $subject   = "Thank you for your submission!";
        mail($email, $subject, $autoreply, "From: Shirley's Marriage Ceremonies - Email Confirmation<$email>");
 
    }
} else {
    echo "Please enter a valid email address or phone number.";
}
     
 
 
?>
