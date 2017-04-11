<?php 
/*
Copyright 2006, Kara-Star, LLC
******************************
Code released as Public Domain
Though it isn't a requirement, we ask you to
please send a donation to paypal@kara-star.com
if you will use this code commercially.  
******************************

This is the document that the form is submitted to.

*/

//Don't forget to include this line! or your form will not work:
include 'secureformsettings.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Us</title>
</head>
<body>
<table>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
<?php
//Security Check
$secimgnum = $_POST['imgnum'];
$securitycode = $_POST['securitycode'];
$encryptedcode = md5($securitycode);
$sql = "select * from " . $tblprefix . "images where imagenumber='$secimgnum' and code='$encryptedcode';";
$result = mysql_query($sql) or die(mysql_error());
$rows = mysql_num_rows($result);
if ($rows != 1) {
echo "You mistyped the security code, please click your back button and try again!";
exit();
}
//End of Security Check

//Begin Email Processing Engine
echo "<p><h2>Thank you for your comment</h2></p>\n";
echo "<p>&nbsp;</p>";
echo "<p><strong>Your message will be added to our guestbook in a couple of days</strong></p>";

//Collect Post Array Data From Submitted Form and Environment
$usragent = $_SERVER['HTTP_USER_AGENT'];  //Get Customer's User Agent
$remoteaddr = $_SERVER['REMOTE_ADDR'];    //Get Customer's Ip Addrress
$custname = $_POST['nm_fhgkic8'];         //Get Customer's Name
$companyname = $_POST['compname'];        //Get Company Name
$mailfrom = $_POST['dhfygien'];           //Get Customer's Email Address
$subject = default_subject; //Subject of Email to you
$customer_message = $_POST['aabbccddee']; //Get Customer's Message
$continent = $_POST['continent'];
$service = $_POST['webdes'] . "\n";       //These colelct the services the customer is interested in:
$service .= $_POST['logodes'] . "\n";
$service .= $_POST['hosting'] . "\n";
$leadsource = $_POST['leadsource'];       //Where did the customer hear about you?
$addnewsletter = $_POST['newslettersub']; //Returns "Yes" or "No" about adding to the newsletter
$sendmail = $_POST['sendmail'];           //Send demo emails or not?
$to = myemail;  //Your email address, as defined in secureformsettings.php

//Message to YOU: Make changes here, beware of the concatinating operator " .= " that you'll need to use at certain times.
$kara_email_from = "$mailfrom";
$kara_email_headers = "From: " . $custname . " <" . $kara_email_from . ">\r\n";
$kara_email_headers .= "Reply-to: " . $kara_email_from . "\r\n";
$kara_email_subject = $subject;
$kara_email_message = "From: " . $custname . "\r\r\n";
$kara_email_message .= $custname . "'s Email Address: " . $kara_email_from . "\r\r\n";
$kara_email_message .= "Message: " . $customer_message . "\r\r\n";
$kara_email_message .= "UserAgent: " . $usragent . "\r\n";
$kara_email_message .= "IP: " . $remoteaddr . "\r\n";
//End of message to Your Business

//Automated reply message to customer: Make changes here, beware of the concatinating operator " .= " that you'll need to use.
$email_from = $to;
$email_headers = "From: " . email_name . " <" . $emailfrom . ">\r\n";
$email_headers .= "Reply-to: " . $to . "\r\n";
$email_subject = customer_subject;
$email_message = "Thank you, " . $custname . ", for your interest in our services! \r\n";
$email_message .= "We will get back to you soon. \n";
$email_message .= "\r";
$email_message .= "We hope to do business with you soon! \r\r\n";
$email_message .= "Sincerely, \r\r\n";
$email_message .= "     The Team \r\n";
$email_message .= "\r\r\r";
$email_message .= "---------------------------\r\n";
$email_message .= "Your Message:<br />\r\r\n";
$email_message .= $customer_message;
//End of automated reply message


//Send Email(s)
if (sendautoresponse == 1) {
mail($to,$kara_email_subject,$kara_email_message,$kara_email_headers); //Email to you
mail($mailfrom,$email_subject,$email_message,$email_headers);          //Autoresponse
}
elseif (sendautoresponse == 0) {
mail($to,$kara_email_subject,$kara_email_message,$kara_email_headers); //Email to you
}
//End Email Processing Engine
?>
    </td>
  </tr>
  
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>