<?php
namespace stic\Demo\TermiiPHP;
require '../vendor/autoload.php';
use stic\TermiiPHP\Termii;

$termii = new Termii([
    'apikey' => '', // apikey
    'certificate' => 'cacert-2020-07-22.pem', // trocar com um pem válido
    'from' => '', // your sender ID
]);

// $result=$termii->getBalance();
// echo $result;

// $data = [
//     "to" => "eg. 2348109077743", 
//     "sms"=>  "",
//     "type" => unicode", 
//     "channel => "generic"
// ];  

// $result=$termii->sendSms($data);
// echo $result;

// $data = [
//     "to" => "eg. 2348109077743", 
//     "pin_attempts" => 10,
//     "pin_time_to_live" =>  5,
//     "pin_length" => 6,
//     "pin_placeholder" => "< 1234 >",
//     "message_text" => "Your pin is < 1234 >",
//     "pin_type" => "NUMERIC",
//     "message_type" => "NUMERIC",
//     "type" => plain", 
//     "channel => "dnd"
// ];

//$result=$termii->sendOtpToken($data);
// echo $result;

// $data = [
//     "pin_id" => "NUMERIC",
//     "pin" => "eg. 2348109077743",
//     "type" => plain", 
//     "channel => "dnd"
// ];

// $result=$termii->verifyOtpToken($data);
// echo $result;

// $result=$termii->checkPhoneStatus("eg. 2348109077743");
// echo $result;


