<?php
session_start();
include "../conn.php";
if(empty($_SESSION['id'])){
  echo "<script> alert('Login to continue...!!!!') </script>";
  echo "<script> window.location.href='../index.php'</script>";
}
else{
  $id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
  $upqr=mysqli_query($conn,"select * from user where uid='$id'");
  if($upqr){
      $n=mysqli_fetch_array($upqr);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/footer.css">
  
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/donation.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/clock1.css">
  
    
    <script src="../bootstrap-4.3.1-dist/js/clock1.js"></script>

    <title>User</title>
    <link rel="icon" href="image/logo.png" type="image/png">
    <script src="../bootstrap-4.3.1-dist/js/scroll.js"></script>
    
 <style>
body, html, .main {
  height: 100%;
}

section {
  min-height: 150%;
}
</style>
</head>
<body onload="startTime()">
<header>
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <a class="navbar-brand" href="uprofile.php">
            <img src="../image/logo.png" alt="Logo" style="width:100px;" >
          </a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
            <ul class="navbar-nav mr-auto navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="uprofile.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                
                
                
              <li class="nav-item">
              <div class="row" align="right">
                  <div class="col-md-12 clockdate-wrapper">
                    <div id="date"></div>
                    <div id="clock"></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
                  <div class="inline">
                  <ul class="navbar-nav mr-auto navbar-right">
                  <li class="nav-item">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"  aria-haspopup="true" aria-expanded="false">
                    <?php echo $n['uname']; ?>
                    </a>
                    
                </li>
                <li class="nav-item">
                <?php
                if(empty($_SESSION['picture'])){
		            ?>
                  <a href="index.php"><img class="img-responsive" style="border-radius: 50%;" width="50" height="50" src="../icon/profile.png" alt="Avatar" ></a>
                  <?php
                }
                else
                {
                ?>
                  <a href="index.php"><img alt="team member" class="img-responsive" style="border-radius: 50%;" width="50" height="50" src="<?php echo $_SESSION['picture']; ?>" alt="Avatar"></a>
                <?php
                }
                ?>
                </li>
                <li>&nbsp&nbsp</li>
                <li class="nav-item">
                  
                    <a href="ulogout.phpugm=<?php echo $n['umail'];?>"><span class="input-group-text" style="border-radius:50px; margin-top:7px;"><i class="fa fa-power-off"></i></span></a>
                  
                </li>
            </ul>
          </div>
        </nav>
    
    </header>



 



<!--Sections Start-->
          <!--Sections Donate-->
          <div class="main" id="Donate">
  <section class="dn" >
    <!--Donation Start-->
<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="container donate-form col-md-12 ">
            <form class="needs-validation" action ="uupdtprf_react.php" method = "POST" novalidate>
            <h1 class="text-center">Update Profile</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                   <!--Name-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
				          <input type="text" class="form-control" id="uname" placeholder="Name" name="uname" value="<?php echo $n['uname'];?>" disabled>
                <div class="valid-feedback">Looks good!</div>
			        </div>
            <!--Email-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                </div>
                <input type="text" class="form-control" name="umail" value="<?php echo $n['umail'];?>" disabled>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Phone-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
					      <span class="input-group-text"><i class="fa fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" id="uphno"  name="uphno" value="<?php if(empty($n['uphno'])) echo ""; else echo $n['uphno'];?>" maxlength="10" placeholder="Enter phone no" pattern="^\d{10}$" required>
              <div class="valid-feedback">Looks good!</div>
            </div>
             <!--Profession-->
             <div class="input-group form-group">
                <div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                </div>
                <input type="text" class="form-control" id="uprfsn" name="uprfsn" value="<?php echo $n['uprfsn'];?>" maxlength="30" placeholder="Enter profession" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Address-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                </div>
                <textarea class="form-control" id="validationTextarea" style="resize:none" placeholder="Enter your address" name="uadd" required><?php echo $n['uadd'];?></textarea>
                <div class="invalid-feedback">
                Please enter a message in the textarea.
                </div>
            </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn-block login_btn btn btn-primary">
                    </div>
                </div>
            <div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Donation end-->

         
<!--Script for Login & Registration Start-->

<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap-show-password.js"></script>
            <script type="text/javascript" src="../bootstrap-4.3.1-dist/js/pwd.js"></script>
            <script type="text/javascript" src="../bootstrap-4.3.1-dist/js/fvalidation.js"></script>

<!--Script for Login & Registration End-->
<style>
.dn{
    background-image:url(../sectionimage/d.png);
    background-size:cover;
    padding-top:20px;
}
body{
    margin-top:70px;
    
}
hr{
    background:white;
}
.contact-form{
    background:rgba(0,0,0, .6);
    color:white;
    padding-top:100px;
    padding:20px;
    box-shadow:0px 0px 10px 3px gray;
}
.ft{
  background-image:url(../sectionimage/1.jpg);
  background-size:cover; 
}
</style>
  </section>
</div>
<!--Sections End-->

<!--Footer Start-->

 
<footer class="footer ft">

  <div class="container bottom_border">
    <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
        <!--headin5_amrc-->
        <p><img src="../image/logo.png" alt="Logo" style="width:100px;" ></p>
        <p class="mb10">Yahan kya likhne e theek rhega? Any idea?</p>
        <p><i class="fa fa-location-arrow"></i> Kya Location dun? </p>
        <p><i class="fa fa-phone"></i>  +91-9330233447  </p>
        <p><i class="fa fa fa-envelope"></i> helptogethera@gmail.com  </p>


      </div>


    <div class=" col-sm-4 col-md  col-6 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
      <!--headin5_amrc-->
        <ul class="footer_ul_amrc">
          <li><a href="../terms-conditions.html" target="_blank">Terms and Conditions</a></li>
          <li><a href="#About">Meet the team</a></li>
          <li><a href="#">Aur</a></li>
          <li><a href="#">kya</a></li>
          <li><a href="#">de skte hain</a></li>
          <li><a href="#">yahan</a></li>
        </ul>
    <!--footer_ul_amrc ends here-->
    </div>




    <div class=" col-sm-4 col-md  col-12 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
      <!--headin5_amrc ends here-->

        <ul class="footer_ul2_amrc">
          <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing<a href="#">.</a></p></li>
          <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing<a href="#">.</a></p></li>
          <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing<a href="#">.</a></p></li>
        </ul>
    <!--footer_ul2_amrc ends here-->
    </div>
    </div>
    </div>


    <div class="container">
    <ul class="foote_bottom_ul_amrc">
    <li><a href="#">Home</a></li>
    <li><a href="#About">About</a></li>
    
    <li><a href="#Contact">Contact</a></li>
    </ul>
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @2019 | Designed by <a href="#About">Team Alms Connect </a>(Rahul Kumar, Subhasish Bagchi, Tanmoy Pal and Pabitra Dinda)</p>

    <ul class="social_footer_ul">
    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  <!--social_footer_ul ends here-->
  </div>

</footer>
<!--Footer End-->

    
</body>
</html>
<?
  }
}
?>