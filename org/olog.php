<?php
session_start();
include "../conn.php";
if(isset($_POST['submit'])){
	$e=$_POST['omail'];
    $p=md5($_POST['opwd']);
    
    $qry="select * from org where omail='$e' AND opwd='$p' AND oaccess='Active'";
    
   $res=mysqli_query($conn,$qry);

    if($qry)
    {
        $r=mysqli_num_rows($res);
        if($r==1)
        {
            $rq=mysqli_fetch_array($res);
            //print_r($rq);
            $_SESSION['oid']=$rq['oid'];
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
            echo "<script>alert('Invalid credentials or the Organization is now blocked..!!!!') </script>";
            echo "<script>window.location.href='../index.php'</script>";	
        }	
    }
}
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";

} 
?>