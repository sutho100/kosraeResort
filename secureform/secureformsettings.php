<?php
/*
********KaraFormSecure Form Processor v1.0.1*******************
***************************************************************
***************************************************************
KaraFormSecure 1.0.1 Settings
***************************************************************
***************************************************************
      !!Be sure to change your settings in this file!!
***************************************************************
***************************************************************
This code was created by Kara-Star, LLC      www.kara-star.com

2006

Kara-Star releases this code as Public Domain, free for
anyone at all to use in any manner.  You are free to copy,
edit, redistribute, or alter this code in any way.  We 
consider it a duty to enhance web security.  We appreciate
donations via PayPal, if you feel so inclined.
***************************************************************
***************************************************************
*/
//SETTINGS:
//MySQL Database Info: Change these to your settings BEFORE running this script.
$dbhost = "localhost";              //MySQL Host - Usually will not need to be changed.
$dbname = "kosraena_secure";                //MySQL Database Name
$dbusername = "kosraena_user";         //MySQL Database User Name
$dbpass = "maxjuan1!";        //MySQL Database Password

//Custom Form Settings
define(myemail, 'comments@underwatercolours.com, doug@kosraenautilus.com'); //Email address to send form submissions to
define(default_subject, 'Please enter this to the Kosrae Nautilus Resort guestbook'); //Subject of Email Sent To You
define(customer_subject, 'Thank You for your comment in the Kosrae Nautilus Resort guestbook'); //Subject of Email Sent To Customer
define(email_name, 'Kosrae Nautilus Resort');    //You or your company's name (Should be very short, it goes in email headers)
define(sendautoresponse, '0');        //Change to "0" to disable sending autoresponses from the form (can be changed at any time).

//Table Prefix: Change if you need to before installing, but not genarally necessary.
//This is to allow you to use a single MySQL Database for multiple applications.
$tblprefix = "kfs_";  //You CANNOT change this after installation, or the form will not work.

//Connect to MySQL and select the database.
mysql_connect($dbhost, $dbusername, $dbpass);
mysql_select_db($dbname);
?>