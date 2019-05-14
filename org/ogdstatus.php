<?php 
session_start();
include "../conn.php";
$gdid=$_REQUEST['gdid'];
$gdstatus=$_REQUEST['gdstatus'];
$gdcstatus=$_REQUEST['gdcstatus'];
if(empty($gdid)){
	echo "<script>alert('Login to continue...!!')</script>";
	echo "<script> window.location.href='../index.php'</script>";
}
else{
	if($gdstatus=='Processed'&& $gdcstatus=='Waiting'){
		echo "<script>alert('Guest Donation already processed...!!')</script>";
		echo "<script> window.location.href='index.php'</script>";
	}
	if($gdstatus=='Processed'&& $gdcstatus=='Donated'){
		echo "<script>alert('Guest Donation already completed...!!')</script>";
		echo "<script> window.location.href='index.php'</script>";
	}
	if($gdstatus=='Pending'){
		$qr=mysqli_query($conn,"UPDATE gdonate SET gdstatus='Processed' where gdid='$gdid'");
		if($qr)
		{
			echo "<script>alert('Guest Donation Processed Successfully...!!')</script>";
			echo "<script> window.location.href='index.php'</script>";
		}
	}
}
?>