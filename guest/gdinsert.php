<?php
session_start();
include "../conn.php";
if(isset($_POST['sub'])){
	$oid=$_SESSION['oid'];
	$gadd=$_SESSION['gadd'];
	$gdstatus=$_SESSION['gdstatus'];
	$gdcstatus=$_SESSION['gdcstatus'];
	$gphno=$_POST['gphno'];
	$guel=$_POST['guel'];
	$gidno=$_POST['gidno'];	
	$ggdtype=$_POST['gdtype'];
	$gdtype=implode(',',$ggdtype);
    $gdinsert = "insert into gdonate values('','$gdtype','$gphno','$guel','$gidno','$gadd','$oid','$gdstatus','$gdcstatus',CURRENT_TIMESTAMP,'')";
    $gdiquery = mysqli_query($conn,$gdinsert);
    if($gdiquery){
        echo "<script>alert('Donated Successsfully')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
    else{
        echo "<script>alert('Donation not completed')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
}
else{
    echo "<script> alert('Continue from homepage donation section ...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>