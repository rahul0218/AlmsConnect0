<?php
	session_start();
	include "../conn.php";
	if (!isset($_SESSION['access_token'])) {
		header('Location: ../index.php');
		exit();
	}
	else
	{
		//$ugid=$_SESSION['uid']
		//$gupic=$_SESSION['picture'];
		$uname=$_SESSION['givenName']." ".$_SESSION['familyName'];
		//$uadd=$_POST['uadd'];
		$umail=$_SESSION['email'];
		//$ugen=$_SESSION['gender'];
		/*$uphno=$_POST['uphno'];
		$uprfsn=$_POST['uprfsn'];
		$uage=$_POST['uage'];
		$usel=$_POST['usel'];
		$uidno=$_POST['uidno'];
		$upwd=$_POST['upwd'];
		//$ucpwd=$_POST['ucpwd'];
		$uaccess=$_POST['uaccess'];*/
		$sqry = "select * from user where umail='$umail'";
		$chkeml = mysqli_query($conn,$sqry);
		$s=mysqli_fetch_array($chkeml);
		$count = mysqli_num_rows($chkeml);
		if($count==0){
			$query="insert into user values('','$uname','','$umail','','','','','','','','','Active')";
			$cqry=mysqli_query($conn,$query);	
			if($cqry){
				$sqry =mysqli_query($conn,"select uid from user where umail='$umail'");
				$n=mysqli_fetch_array($sqry);
				$umode="GLogin";
				date_default_timezone_set('Asia/Calcutta');
				$logindt = date('Y-m-d H:i:s'); 
				$_SESSION['id']=$n['uid'];
				$sid=$_SESSION['id'];
				$sname=$_SESSION['givenName']." ".$_SESSION['familyName'];
				$smail=$_SESSION['email'];
				shell_exec("C:/xampp/htdocs/AlmsConnect/user/records/Probhat2.0/glogin.py $umode $logindt $sid $sname $smail");
				echo "<script>alert('You are registered now...!!')</script>";
				echo "<script>window.location.href='uprofile.php'</script>";
			}
			else{
				echo "<script>alert('User not Registered')</script>";
				echo "<script>window.location.href='../index.php'</script>";
			}
		}
		else{
			$_SESSION['id']=$s['uid'];
			$umode="GLogin";
			date_default_timezone_set('Asia/Calcutta');
			$logindt = date('Y-m-d H:i:s'); 
			shell_exec("C:/xampp/htdocs/AlmsConnect/user/records/Probhat2.0/glogin.py $umode $logindt $s[uid] $s[uname] $s[umail]"); 
			/*echo "<script> alert('The email/ph no or the id no you have enetered is already registered..!!!')</script>";
			*/echo "<script> window.location.href='uprofile.php'</script>";
			
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login With Google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $_SESSION['id'] ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender'] ?></td>
					</tr>

					
					<tr>
						<td>Logout</td>
						<td><a href="ulogout.php">Logout</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>