<?php
session_start();
include "../conn.php";
if(isset($_POST['submit'])){
	$e=$_POST['uname'];
	$p=md5($_POST['upwd']);
    $qry="select * from user where umail='$e' AND upwd='$p' AND uaccess='Active'";
    $res=mysqli_query($conn,$qry);
    if($qry)
    {
        $r=mysqli_num_rows($res);
        if($r==1)
        {
            $rq=mysqli_fetch_array($res);
            //print_r($rq);
			date_default_timezone_set('Asia/Calcutta');
			$logindt = date('Y-m-d H:i:s'); 
			if($rq['uphno']!="" && $rq['ugen']!="" && $rq['uage']!="" && $rq['uidt']!="" && $rq['uidno']!="" && $rq['uadd']!="")
			{
				$umode="ULogin";
				shell_exec("C:/xampp/htdocs/AlmsConnect/user/records/Probhat2.0/login.py $umode $logindt $rq[uid] $rq[uname] $rq[umail] $rq[uphno] $rq[ugen] $rq[uage] $rq[uidt] $rq[uidno] $rq[uadd]"); 
				$_SESSION['id']=$rq['uid'];
				echo "<script>alert('Login Successful')</script>";
				echo "<script>window.location.href='uprofile.php'</script>";
			}
			if($rq['uphno']=="" || $rq['ugen']=="" || $rq['uage']=="" || $rq['uidt']=="" || $rq['uidno']=="" || $rq['uadd']=="")
			{
				$umode="GLogin";
				shell_exec("C:/xampp/htdocs/AlmsConnect/user/records/Probhat2.0/glogin.py $umode $logindt $rq[uid] $rq[uname] $rq[umail]"); 
				$_SESSION['id']=$rq['uid'];
				echo "<script>alert('Login Successful')</script>";
				echo "<script>window.location.href='uprofile.php'</script>";
			}
		}
        else
        {
            echo "<script>alert('Invalid credentials or the User is now blocked..!!!!') </script>";
            echo "<script>window.location.href='../index.php'</script>";	
        }
    }
}  
else{
    echo "<script> alert('Login to continue...!!!!') </script>";
    echo "<script> window.location.href='../index.php'</script>";
} 
?>
