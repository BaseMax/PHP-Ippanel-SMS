<?php
// Load the class
require "ippanel.php";

// Define the class
$sms = new SmsIppanel();
// Set the Key
$sms->setKey('ROlxxxxxim-xxxx=');
// Set the Pattern Key
$sms->setPattern('d2re6xxxxx');
// Set phonennumber sender
$sms->setNumber('9890000145');
// Pass target phone number and the verification code
$res = $sms->sendPattern('0912xxxxxxx', rand(1000, 9999));

var_dump($res);
