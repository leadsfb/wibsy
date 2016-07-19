<?php

$verify_token=$_REQUEST['hub_verify_token'];

if($verify_token=="abc123"){
echo isset( $_REQUEST['hub_challenge'] ) ? $_REQUEST['hub_challenge'] : false;
};

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
error_log(print_r($input, true));

?>