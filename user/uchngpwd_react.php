<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['submit'])){
	$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
	$uopwd=md5($_POST['uopwd']);
	$unpwd=md5($_POST['unpwd']);
	$uncpwd=md5($_POST['uncpwd']);
	$pw=mysqli_query($conn,"select * from user where uid='$id'") or die(mysql_error());
	$row=mysqli_fetch_array($pw);
	$r=$row['upwd'];
	if($unpwd==$uncpwd){
		if(empty($r))
		{
			
			$rq=mysqli_query($conn,"update user set upwd='$unpwd' where uid='$id'") or die(mysql_error());
			echo "<script> alert('Password successfully changed...!!!')</script>";
			echo "<script>window.location.href='uprofile.php'</script>";	
		}
		else if($uopwd==$r)
		{
			if($uopwd==$unpwd)
			{
				echo "<script> alert('Old Password encountered...check carefully & enter a new one !!!!') </script>";
				echo "<script> window.location.href='uchngpwd.php'</script>";
			}
			else{
				$rq=mysqli_query($conn,"update user set upwd='$unpwd' where uid='$id'") or die(mysql_error());
				echo "<script> alert('Password successfully changed...!!!')</script>";
				echo "<script>window.location.href='uprofile.php'</script>";	
			}
		}
		else
		{
			echo "<script> alert('Error...Enter old password correctly !!')</script>";
			echo "<script>window.location.href='uchngpwd.php'</script>";
		}
	}
	else{
		echo "<script> alert('Error...New Password & New Confirm Password Mismatches!!')</script>";
		echo "<script>window.location.href='uchngpwd.php'</script>";
	}
}	
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}

?>