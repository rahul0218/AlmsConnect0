<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['submit'])){
	$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
    $uadd=$_POST['uadd'];
    $uphno=$_POST['uphno'];
    $uprfsn=$_POST['uprfsn'];
    $upqr=mysqli_query($conn,"select * from user where uid='$id'");
    if($upqr){
        $n=mysqli_fetch_array($upqr);
        if($n['uadd']==$uadd && $n['uphno']==$uphno && $n['uprfsn']==$uprfsn){
            echo "<script> alert('No changes made...check carefully !!!!') </script>";
            echo "<script> window.location.href='uupdt.php'</script>";
        }
        else{
			$sqry = "select * from user where uphno='$uphno'";
			$chkph = mysqli_query($conn,$sqry);
			$count = mysqli_num_rows($chkph);
			if($count==0){
				$uqry=mysqli_query($conn,"UPDATE user SET uadd='$uadd',uphno='$uphno',uprfsn='$uprfsn'  where uid='$id'") or die(mysqli_error()); 
				if($uqry)
				{
					echo "<script> alert('Updation Successfully Completed !!!!') </script>";
					echo "<script> window.location.href='uprofile.php'</script>";
				}
				else
				{
					echo "<script> alert('Updation Failed !!!!') </script>";
					echo "<script> window.location.href='uupdtprf.php'</script>";
				}
			}
			else{
				$uqry=mysqli_query($conn,"UPDATE user SET uadd='$uadd',uprfsn='$uprfsn'  where uid='$id'") or die(mysqli_error()); 
				echo "<script> alert('Updation Successfully Completed !!!!') </script>";
				echo "<script> window.location.href='uprofile.php'</script>";
			}
			
        }
    }
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>