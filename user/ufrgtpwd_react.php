<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['change'])){
	$id=$_SESSION['fpid'];
	$unpwd=md5($_POST['unpwd']);
	$pw=mysqli_query($conn,"select * from user where uid='$id'") or die(mysql_error());
	if($pw){
		$rq=mysqli_query($conn,"update user set upwd='$unpwd' where uid='$id'") or die(mysql_error());
		session_destroy();
		echo "<script> alert('New password successfully updated...Login to continue !!!')</script>";
		echo "<script>window.location.href='../index.php'</script>";	
	}
	else
	{
		session_destroy();
		echo "<script> alert('Error...Try Again !!')</script>";
		echo "<script>window.location.href='ufpwdfrm.php'</script>";
	}
}	
else{
	session_destroy();
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>