<?php
session_start();
include "../conn.php";
if(empty($_SESSION['oid']))
{
	echo "<script> alert('Login to continue...!!!!') </script>";
	echo "<script> window.location.href='../index.php'</script>";
}
else{
	$id=$_SESSION['oid'] ? $_SESSION['oid'] : '';
	$a=mysqli_query($conn,"select * from org where oid='$id'");
	if($a)
	{
		$row=mysqli_fetch_array($a);
	}
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
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/team.css">
    
    <script src="../bootstrap-4.3.1-dist/js/clock1.js"></script>

    <title>Organisation Change Password</title>
    <link rel="icon" href="../image/logo.png" type="image/png">
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
          <a class="navbar-brand" href="index.php">
            <img src="../image/logo.png" alt="Logo" style="width:100px;" >
          </a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
            <ul class="navbar-nav mr-auto navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                  <li class="">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"  aria-haspopup="true" aria-expanded="false">
                    <?php echo $row['oname'];?>
                    </a>
                   
                </li>
                
                
                <li class="nav-item">
                  
                <a href="ologout.php"><span class="input-group-text" style="border-radius:50px; margin-top:7px;"><i class="fa fa-power-off"></i></span></a>
                  
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
        
        <div class="col-md-8">
            <div class="container donate-form col-md-12 ">
            <!-- For Donation Item Update validation starts -->
            <script>
              function validate()
              {
                var udtype=document.getElementsByName("ditem[]");
                var itemchecked=0;
                for(i=0;i<udtype.length;i++)
                {
                if(udtype[i].checked)
                {
                  itemchecked=1;
                  break;
                }
                }
                if(itemchecked==0)
                {
                alert("Select the item before you send the update request");
                return false;
                }  
                else
                {
                return true;  
                }
              }
          </script>
          <!-- For Donation Item Update validation ends -->	
            <form class="needs-validation" action ="dupreqst_react.php" method = "POST" onsubmit="return validate()" novalidate>
            <h1 class="text-center">Request to Admin for update donation items</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                  <!--Type of Donation-->
            <div class="form-group">
                <label>Currently Supported Item/s</label>
            </div>
            <div class="form-group">
                <input type="text" name="ods" value="<?php $sitem=$row['ositem'];
                if(empty($sitem)) echo "No donation item supported right now";
                else echo $sitem;?>" maxlength="25" class="form-control" disabled>
            </div>
            <div class="form-group">
            <label>Request for Update Donation Item</label>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-handshake-o"></i></span>
                        </div>
                    </div>
                    
                    <?php
                        $iname="select iid,ditem from ditem where istatus='Active'";
                        $citem = mysqli_query($conn,$iname);
                        $count=1;
                        while($row=mysqli_fetch_array($citem)){?>
                        
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="ditem[]" type="checkbox" id="inlineCheckbox2" value="<?php echo $row['ditem'];?>">
                            <label  class="form-check-label" for="inlineCheckbox2"><?php echo $row['ditem'];?></label>
                        </div>
                    </div>
                    
                   <?php
                   }
                      ?>
                </div>
             </div>

                    <div class="form-group">
                        <input type="submit" value="Update" name="s" class="btn-block login_btn btn btn-primary">
                    </div>
                </div>
            <div>
            </form>
        </div>
    </div>
</div>
</div>
<!--Donation end-->

  </section>
</div>
         
<!--Script for Login & Registration Start-->

<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap-show-password.js"></script>
            <script type="text/javascript" src="../bootstrap-4.3.1-dist/js/pwd.js"></script>
            <script type="text/javascript" src="../bootstrap-4.3.1-dist/js/fvalidation.js"></script>

<!--Script for Login & Registration End-->


<script type="text/javascript" src="bootstrap-4.3.1-dist/js/fvalidation.js"></script>
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
    margin-top:100px;
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
<?php
}
?>