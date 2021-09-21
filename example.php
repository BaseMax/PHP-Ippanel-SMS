<?php
// Load the class
require "ippanel.php";

// Define the class
$sms = new SmsIppanel();
// Set the Key
$sms->setKey('ROlRLxim-RlHf1RpXrHim6oo8y2sROF1ISlSsOBIh1Y=');
// Set the Pattern Key
$sms->setPattern('d2re63ztr2');
// Set phonennumber sender
$sms->setNumber('9890000145');
// Pass target phone number and the verification code
$res = $sms->sendPattern('09134950787', rand(1000, 9999));

var_dump($res);
