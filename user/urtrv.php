<?php
include "../conn.php";
session_start();
if(isset($_REQUEST['submit'])){
	$uname=$_POST['uname'];
	$uadd=$_POST['uadd'];
	$umail=$_POST['umail'];
	$uphno=$_POST['uphno'];
	$ugen=$_POST['ugen'];
	$uprfsn=$_POST['uprfsn'];
	$uage=$_POST['uage'];
	$usel=$_POST['usel'];
	$uidno=$_POST['uidno'];


	$uq1=$_POST['uq1'];
	$ua1=$_POST['ua1'];
	$uq2=$_POST['uq2'];
	$ua2=$_POST['ua2'];
	//$uqa1qa2="{$uq1}.{$ua1}.{$uq2}.{$ua2}";  Concatenate multiple variables (it works faster than using dot(.)
	$uqa1qa2=$uq1.$ua1.$uq2.$ua2;
	//echo $uqa1qa2;
	$upwd=md5($_POST['upwd']);

	$sqry = "select * from user where umail='$umail' or uphno='$uphno' or uidno='$uidno'";
	$chkeml = mysqli_query($conn,$sqry);
	$count = mysqli_num_rows($chkeml);
	if($count==0){
		$query="insert into user values('','$uname','$uadd','$umail','$uphno','$ugen','$uprfsn','$uage','$usel','$uidno','$uqa1qa2','$upwd','Active')";
		$cqry=mysqli_query($conn,$query);	
		if($cqry){
			echo "<script>alert('User Registered...Login to continue !!')</script>";
			echo "<script>window.location.href='../index.php'</script>";
		}
		else{
			echo "<script>alert('User not Registered')</script>";
			echo "<script>window.location.href='../index.php'</script>";
		}
	}
	else{
		echo "<script> alert('The email/phno or the id no you have enetered is already registered..!!!')</script>";
		echo "<script> window.location.href='../index.php'</script>";
	}
}
else{
	echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>