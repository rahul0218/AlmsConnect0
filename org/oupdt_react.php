<?php
session_start();
include "../conn.php";
if(empty($_SESSION['oid']))
{
	echo "<script> alert('Login to continue...!!!!') </script>";
	echo "<script> window.location.href='../index.php'</script>";
}
else{
    $id=$_SESSION['oid'] ? $_SESSION['oid'] : '';
    $ophno=$_POST['ophno'];
    $oadd=$_POST['oadd'];
    $upqr=mysqli_query($conn,"select * from org where oid='$id'");
    if($upqr){
        $n=mysqli_fetch_array($upqr);
        if($n['ophno']==$ophno && $n['oadd']==$oadd){
            echo "<script> alert('No changes made...check carefully !!!!') </script>";
            echo "<script> window.location.href='oupdt.php'</script>";
        }
        else{
			$sqry = "select * from org where ophno='$ophno'";
			$chkph = mysqli_query($conn,$sqry);
			$count = mysqli_num_rows($chkph);
			if($count==0)
			{
				$uqry=mysqli_query($conn,"UPDATE org SET oadd='$oadd',ophno='$ophno' where oid='$id'") or die(mysqli_error());
				echo "<script> alert('Updation Successfully Completed !!!!') </script>";
				echo "<script> window.location.href='index.php'</script>";
			}
			else{
				$uqry=mysqli_query($conn,"UPDATE org SET oadd='$oadd' where oid='$id'") or die(mysqli_error()); 
				echo "<script> alert('Updation Successfully Completed !!!!') </script>";
				echo "<script> window.location.href='index.php'</script>";
			}
        }
    }
}
?>