<?php 
session_start();
include "../conn.php";
$did=$_REQUEST['did'];
$dstatus=$_REQUEST['dstatus'];
$dcstatus=$_REQUEST['dcstatus'];
if(empty($did)){
	echo "<script>alert('Login to continue...!!')</script>";
	echo "<script> window.location.href='../index.php'</script>";
}
else{
	if($dstatus=='Processed' && $dcstatus=='Waiting'){
		echo "<script>alert('User Donation already processed...!!')</script>";
		echo "<script> window.location.href='index.php'</script>";
	}
	if($dstatus=='Processed' && $dcstatus=='Donated'){
		echo "<script>alert('User Donation already completed...!!')</script>";
		echo "<script> window.location.href='index.php'</script>";
	}
	if($dstatus=='Pending'){
		$qr=mysqli_query($conn,"UPDATE udonate SET dstatus='Processed' where did='$did'");
		if($qr)
		{
			echo "<script>alert('User Donation Processed Successfully...!!')</script>";
			echo "<script> window.location.href='index.php'</script>";
		}
	}
}
?>