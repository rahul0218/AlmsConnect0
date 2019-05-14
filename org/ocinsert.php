<?php
session_start();
include "../conn.php";
$id=$_SESSION['oid'] ? $_SESSION['oid'] : '';
if(isset($_REQUEST['osubmit'])){
	$upqr=mysqli_query($conn,"select * from org where oid='$id'");
	$n=mysqli_fetch_array($upqr);
	$qname=$n['oname'];
	$qmail=$n['omail'];
	$qphno=$n['ophno'];
	$query=$_POST['query'];
    $aqinsert = "insert into acontact values('','Org','$qname','$qmail','$qphno','$query',CURRENT_TIMESTAMP,'','Unsolved','')";
    $qiquery = mysqli_query($conn,$aqinsert);
    if($qiquery){
		$last_qid = mysqli_insert_id($conn);
        echo "<script>alert('**Please note that your query number is : Q'+$last_qid+' and our admin will contact with you soon...Thank You!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Query not posted...Check details..!!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
else{
     echo "<script> alert('Login to continue...!!!!') </script>";
		echo "<script> window.location.href='../index.php'</script>";
}
?>