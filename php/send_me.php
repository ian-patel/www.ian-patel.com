<?php

session_start();

# configuration 
// $ip = $_SERVER['REMOTE_ADDR'];
// $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
// $message = "IP : ". $details->ip . "
//            Country : ". $details->country . "
//            City : ". $details->city . "
//            loc : ". $details->loc . "
//            Company : ". $details->org;  
// $subject = 'Page visit';
// $mailto = 'others@ian-patel.com';

// # a random hash will be necessary to send mixed content
// $separator = md5(time());

// # carriage return type (we use a PHP end of line constant)
// $eol = PHP_EOL;

// # main header (multipart mandatory)
// $headers = "From: Ian Patel". $eol;
// $headers .= 'Reply-To: DO not Reply' . $eol;
// $headers .= "MIME-Version: 1.0" . $eol;
// $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
// $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
// $headers .= "This is a MIME encoded message." . $eol . $eol;

// # message
// $headers .= "--" . $separator . $eol;
// $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
// $headers .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
// $headers .= $message . $eol . $eol;
// mail($mailto, $subject, "", $headers);
