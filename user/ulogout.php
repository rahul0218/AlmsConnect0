<?php
	//session_start();
	require_once "config.php";
	$ugid=$_REQUEST['ugm'];
	$umode="Logout";
	date_default_timezone_set('Asia/Calcutta');
	$logoutdt = date('Y-m-d H:i:s');
	shell_exec("C:/xampp/htdocs/Project9.9bot/user/records/Probhat2.0/logout.py $umode $logoutdt $ugid");
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	echo "<script> alert('You are logged out !!!!') </script>";
	echo "<script> window.location.href='../index.php'</script>";
?>