<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['s'])){
	$id=$_SESSION['oid'];
	$ouudtype=isset($_POST['ditem']) ? $_POST['ditem'] : array();  // To fetch empty & non-empty checkbox value by Ternary oprtr
	$oudtype=implode(',',$ouudtype);
	$upqr=mysqli_query($conn,"select * from org where oid='$id'");
    if($upqr){
        $n=mysqli_fetch_array($upqr);
        if($n['oreqitem']==$oudtype){
            echo "<script> alert('Already requested for updation..Please wait for admin approval !!!!') </script>";
            echo "<script> window.location.href='dupreqst.php'</script>";
        }
        else{
			if($n['ositem']==$oudtype){
				echo "<script> alert('Request not processed..Requested donation item already exists !!!!') </script>";
				echo "<script> window.location.href='dupreqst.php'</script>";
			}
			else{
				$qr=mysqli_query($conn,"UPDATE org SET oreqitem='$oudtype' where oid='$id'");
				if($qr)
				{
					echo "<script>alert('Donation Update Request Processed..Please wait for admin approval !!!!')</script>";
					echo "<script> window.location.href='index.php'</script>";
				}
			}
		}
	}
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>