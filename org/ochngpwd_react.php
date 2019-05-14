<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['submit'])){
	$id=$_SESSION['oid'];
	$oopwd=md5($_POST['oopwd']);
	$onpwd=md5($_POST['onpwd']);
	$oncpwd=md5($_POST['oncpwd']);
	$pw=mysqli_query($conn,"select * from org where oid='$id'") or die(mysql_error());
	$row=mysqli_fetch_array($pw);
	$r=$row['opwd'];
	if($onpwd==$oncpwd)
	{
		if($oopwd==$r)
		{
			if($oopwd==$onpwd)
			{
				echo "<script> alert('Old Password encountered...check carefully & enter a new one !!!!') </script>";
				echo "<script> window.location.href='ochngpwd.php'</script>";
			}
			else{
				$rq=mysqli_query($conn,"update org set opwd='$onpwd' where oid='$id'") or die(mysql_error());
				echo "<script> alert('Password successfully changed...!!!')</script>";
				echo "<script>window.location.href='index.php'</script>";	
			}
		} 
		else
		{
			echo "<script> alert('Error...Enter old password correctly !!')</script>";
			echo "<script>window.location.href='ochngpwd.php'</script>";
		}
	}
	else{
		echo "<script> alert('Error...New password & New confirm Password Mismatches !!')</script>";
		echo "<script>window.location.href='ochngpwd.php'</script>";
	}
}	
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}

?>