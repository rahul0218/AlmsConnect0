<?php
include "../conn.php";
if(isset($_REQUEST['s'])){
	$qname=$_POST['qname'];
	$qmail=$_POST['qmail'];
	$qphno=$_POST['qphno'];
	$query=$_POST['query'];
    $aqinsert = "insert into acontact values('','Guest','$qname','$qmail','$qphno','$query',CURRENT_TIMESTAMP,'','Unsolved','')";
    $qiquery = mysqli_query($conn,$aqinsert);
    if($qiquery){
		$last_qid = mysqli_insert_id($conn);
        echo "<script>alert('**Please note that your query number is : Q'+$last_qid+' and our admin will contact with you soon...Thank You!!')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
    else{
        echo "<script>alert('Query not posted...Check details..!!')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
}
else{
    echo "<script> alert('Continue from Contact Us page...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
}
?>