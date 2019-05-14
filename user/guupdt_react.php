<?php
session_start();
include "../conn.php";
$id=$_SESSION['id'];
if(isset($_REQUEST['submit'])){
    $uadd=$_POST['uadd'];
    $uphno=$_POST['uphno'];
	$ugen=$_POST['ugen'];
    $uprfsn=$_POST['uprfsn'];
	$uage=$_POST['uage'];
	$usel=$_POST['usel'];
	$uidno=$_POST['uidno'];
	$sqry = "select * from user where uphno='$uphno' or uidno='$uidno'";
	$chkph = mysqli_query($conn,$sqry);
	$count = mysqli_num_rows($chkph);
	if($count==0){
		$uqry=mysqli_query($conn,"UPDATE user SET uadd='$uadd',uphno=$uphno,ugen='$ugen',uprfsn='$uprfsn',uage=$uage,uidt='$usel',uidno='$uidno' where uid='$id'") or die(mysqli_error()); 
		if($uqry)
		{
			$umode="ULogin";
			date_default_timezone_set('Asia/Calcutta');
			$logindt = date('Y-m-d H:i:s'); 
			$chkarr = mysqli_query($conn,"select *from user where uid='$id'");
			$farr=mysqli_fetch_assoc($chkarr);
			$guid=$farr['uid'];
			$guname=$farr['uname'];
			$gumail=$farr['umail']; 
			$guphno=$farr['uphno']; 
			$gugen=$farr['ugen']; 
			$guage=$farr['uage']; 
			$guidt=$farr['uidt']; 
			$guidno=$farr['uidno']; 
			$guadd=$farr['uadd'];
			shell_exec("C:/xampp/htdocs/Project9.9bot/user/records/Probhat2.0/login.py $umode $logindt $guid $guname $gumail $guphno $gugen $guage $guidt $guidno $guadd"); 
			echo "<script> alert('Updation Successfully Completed !!!!') </script>";
			echo "<script> window.location.href='uprofile.php'</script>";
		}
		else
		{
			echo "<script> alert('Updation Failed !!!!') </script>";
			echo "<script> window.location.href='guupdt.php'</script>";
		}
    }
	else{
		echo "<script> alert('Updation Failed...The Phone Number/Id card no. your enetered is already exists !!!!') </script>";
				echo "<script> window.location.href='guupdt.php'</script>";
	}
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>