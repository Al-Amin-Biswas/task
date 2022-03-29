<?php
// the message
$msg = "First line of text\nSecond line of text";

ini_set('SMTP','smtpout.secureserver.net');
ini_set('smtp_port',80);


//$retval = mail( $to, $subject, $message );
mail("mdmin24@gmail.com","sent mail using php",$msg);
?>