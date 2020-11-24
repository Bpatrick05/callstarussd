<?php

ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE);

require 'config.php';

$actionFailed = false;

$request['subscriberInput'] = $_POST['subscriberInput'];
$request['sessionId'] = $_POST['sessionId'];
$request['msisdn'] = $_POST['msisdn'];
$request['newRequest'] = $_POST['newRequest'];

$config = new Config();
$data = $config->parseXML($request);
$url = "http://localhost/starconnectussd/";
$response = $config->curl($url, $data);


//=== Default data
$lang = 'EN';
$MAP_CODE = null;
$display = "WELCOME TO TRACAR RWANDA";
$session_ussd_user_data = null;

// Default config
$arrayField['Freeflow'] = 'FC';


    
header('Content-type: UTF-8');
header('Freeflow: '.$arrayField['Freeflow']);
// echo $display." ";
echo $response;

?>