<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['submit'])){
	$umail=$_POST['umail'];
	$uphno=$_POST['uphno'];
	$uq1=$_POST['uq1'];
	$ua1=$_POST['ua1'];
	$uq2=$_POST['uq2'];
	$ua2=$_POST['ua2'];
	$uqa1qa2=$uq1.$ua1.$uq2.$ua2;
	$pw=mysqli_query($conn,"select * from user where umail='$umail' AND uphno='$uphno'") or die(mysql_error());
    if($pw)
    {
        $r=mysqli_num_rows($pw);
        if($r==1)
        {
			$rq=mysqli_fetch_array($pw);
            if($uqa1qa2==$rq['uqa1qa2'])
			{
				$_SESSION['fpid']=$rq['uid'];
				//echo $_SESSION['fpid'];
				echo "<script> alert('User Verified...Now you can update your password..!!!!') </script>";
				echo "<script> window.location.href='ufrgtpwd.php'</script>";
			}
			else{
				echo "<script> alert('Profile security QnA mismatched...!!!')</script>";
				echo "<script>window.location.href='ufpwdfrm.php'</script>";	
			}
		}
		else
		{
			echo "<script> alert('The email id or phone no. is not registered...!!!')</script>";
			echo "<script>window.location.href='ufpwdfrm.php'</script>";	
		}
	} 
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>