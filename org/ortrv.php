<?php
include "../conn.php";
$oname=$_POST['oname'];
$ono=$_POST['ono'];
$odate=$_POST['odate'];
$omail=$_POST['omail'];
$ophno=$_POST['ophno'];
$oodtype=$_POST['udtype'];
$odtype=implode(',',$oodtype);
$opwd=md5($_POST['opwd']);
//$ocpwd=$_POST['ocpwd'];
$oadd=$_POST['oadd'];
$orj=$_POST['orj'];
if(empty($omail)){
        echo "<script> alert('Login to continue...!!!!') </script>";
        echo "<script> window.location.href='../index.php'</script>";
}
else{
	//if($opwd==$ocpwd){
		$sqry = "select * from org where oname='$oname' or omail='$omail' or ono='$ono'";
		$chkeml = mysqli_query($conn,$sqry);
		$count = mysqli_num_rows($chkeml);
		if($count==0){
			$query="insert into org values('','$oname','$ono','$odate','$omail','$ophno','$opwd','$oadd','','$odtype','$orj','Active')";
			$cqry=mysqli_query($conn,$query);	
			if($cqry){
				echo "<script>alert('Organization Registered...Login to continue !!')</script>";
				echo "<script>window.location.href='../index.php'</script>";
			}
			else{
				echo "<script>alert('Organization is not Registered')</script>";
				echo "<script>window.location.href='../index.php'</script>";
			}
		}
		else{
			echo "<script> alert('The organization or the entered mail id is already registered..!!!')</script>";
			echo "<script> window.location.href='../index.php'</script>";
		}
	/*}
	else{
		echo "<script> alert('Password & Confirm Password does not matched..!!!')</script>";
		echo "<script> window.location.href='oreg.php'</script>";
	}*/
}
?>