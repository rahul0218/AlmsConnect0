<?php
session_start();
include "../conn.php";
if(isset($_POST['s'])){
    $uudtype=$_POST['udtype'];
    $udtype=implode(',',$uudtype);
    $uid = $_SESSION['id'];
    $oid=$_SESSION['oid'];
	$dstatus="Pending";
	$dcstatus="Waiting";
    $gdinsert = "insert into udonate values('','$udtype','$uid','$oid','$dstatus','$dcstatus',CURRENT_TIMESTAMP,'')";
    $gdiquery = mysqli_query($conn,$gdinsert);
    if($gdiquery){
        echo "<script>alert('Donated Successsfully')</script>";
        echo "<script>window.location.href='uprofile.php'</script>";
    }
    else{
        echo "<script>alert('Donation not completed')</script>";
        echo "<script>window.location.href='uprofile.php'</script>";
    }
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>