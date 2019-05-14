<?php
session_start();
include "../conn.php";
if(isset($_REQUEST['usubmit'])){
    $id=$_SESSION['id'];
	$upqr=mysqli_query($conn,"select * from user where uid='$id'");
	$n=mysqli_fetch_array($upqr);
	$qname=$n['uname'];
	$qmail=$n['umail'];
	$qphno=$n['uphno'];
    $query=$_POST['query'];
    if(empty($n['uadd']) || empty($n['uphno']) || empty($n['ugen']) || empty($n['uprfsn']) || empty($n['uage']) || empty($n['uage']) || empty($n['uidt']) || empty($n['uidno'])){ 
        echo "<script> alert('Please complete your profile information before posting any query..!!!')</script>";
        echo "<script> window.location.href='guupdt.php'</script>";
    }
    else{
        $aqinsert = "insert into acontact values('','User','$qname','$qmail','$qphno','$query',CURRENT_TIMESTAMP,'','Unsolved','')";
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
}
else{
     echo "<script> alert('Login to continue...!!!!') </script>";
	 echo "<script> window.location.href='../index.php'</script>";
}
?>