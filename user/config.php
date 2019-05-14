<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	/*$gClient->setClientId("109055303662-ukoiaag8njea3prcl5csqcvki1icg6r7.apps.googleusercontent.com");
	$gClient->setClientSecret("mNnOzMUQaybjPnkhmZeb0XjP");*/
	/*$gClient->setClientId("415407103431-hdqdud871mn8pgs0l0rst1ji590ohll2.apps.googleusercontent.com");
	$gClient->setClientSecret("ljX6rD8UCh1Jgy5fgJngDdLk");*/
	$gClient->setClientId("109055303662-ukoiaag8njea3prcl5csqcvki1icg6r7.apps.googleusercontent.com");
	$gClient->setClientSecret("XjoBpFgrNzY1ZKJ4E8YFt3cy");
	$gClient->setApplicationName("ALMS CONNECT");
	$gClient->setRedirectUri("http://localhost/rahul/AlmsConnect/user/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>

