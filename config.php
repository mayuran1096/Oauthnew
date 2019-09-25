<?php

	session_start();
	require_once "Facebook/autoload.php";
	
	$FB=new \Facebook\Facebook([
		'app_id' => '2518190758237653',
		'app_secret' => '1d1fb5e41bacc29a11afa68196b9d59b',
		'default_graph_version' => 'v2.10'
	]);  
	
	$helper=$FB->getRedirectLoginHelper();
	
?>