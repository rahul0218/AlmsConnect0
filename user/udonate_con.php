<?php
session_start();
include "../conn.php";
if(isset($_POST['sub'])){
  $id=$_SESSION['id'];
	$upqr=mysqli_query($conn,"select * from user where uid='$id'");
  $n=mysqli_fetch_array($upqr);
	if(empty($n['uadd']) || empty($n['uphno']) || empty($n['ugen']) || empty($n['uprfsn']) || empty($n['uage']) || empty($n['uage']) || empty($n['uidt']) || empty($n['uidno'])){ 
		echo "<script> alert('Please complete your profile information before donation..!!!')</script>";
		echo "<script> window.location.href='guupdt.php'</script>";
	}
	else{
  $_SESSION['oid']=$_POST['oid'];
  $uidt=$n['uidt'];   // For storing user card informations
  $uidno=$n['uidno'];
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
          <a class="navbar-brand" href="#">
            <img src="../image/logo.png" alt="Logo" style="width:100px;" >
          </a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
            <ul class="navbar-nav mr-auto navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                  <li class="nav-item ">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"  aria-haspopup="true" aria-expanded="false">
                   <?php echo $n['uname'];?>
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
                  
                    <a href="ulogout.php?ugm=<?php echo $n['umail'];?>"><span class="input-group-text" style="border-radius:50px; margin-top:7px;"><i class="fa fa-power-off"></i></span></a>
                  
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
            <!--validation for blank item check start-->
            <script>
                    function validate()
                    {
                      var gdtype=document.getElementsByName("udtype[]");
                      var itemchecked=0;
                      for(i=0;i<gdtype.length;i++)
                      {
                        if(gdtype[i].checked)
                        {
                          itemchecked=1;
                          break;
                        }
                      }
                      if(itemchecked==0)
                      {
                        alert("Select the item you want to donate");
                        return false;
                      }  
                      else
                      {
                        return true;  
                      }
                    }
                  </script>
                <!--validation for blank item check end-->
            <form class="needs-validation" action="udinsert.php" method="post" onSubmit="return validate()" novalidate>
            <h1 class="text-center">Donate</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                  <!--Type of Donation-->
                  <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-handshake-o"></i></span>
                                    </div>
                                </div>

                                <?php
                                $oid=$_SESSION['oid'];
                                $ditems=mysqli_query($conn,"select *from org where oid='$oid'");
                                $n=mysqli_fetch_array($ditems);
                                $oditems=$n['ositem'];		
                                $oditem=explode(",",$oditems);
                                $iname="select iid,ditem from ditem where istatus='Active'";
                                $citem = mysqli_query($conn,$iname);
                                while($m=mysqli_fetch_array($citem)){
                                  //echo $m['ditem'];
                                  $item=$m['ditem']; 
                                  if(in_array($item,$oditem)){
                                    ?>
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="udtype[]" value="<?php echo $item;?>">
                                            <label class="form-check-label" for="inlineCheckbox1"><?php echo $item;?></label>
                                        </div>
                                    </div>
                                    <?php
                                  }
                                }
                                ?>
                            </div>
                        </div>
                       
                       
                      <!--ID Card-->
                      <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input type="text" class="form-control" id="usel" name="usel" value="<?php echo $uidt;?>" disabled>
                            <div class="valid-feedback">Looks good!</div>
                        </div> 
                        <!--ID Card Number-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input type="text" class="form-control" id="uidno" name="uidno" placeholder="ID Number" minlength="10" maxlength="12" value="<?php echo $uidno;?>"  disabled>
                            <div class="valid-feedback">Looks good!</div>
                        </div> 

                    <div class="form-group">
                        <input type="submit" value="Donate" name="s" class="btn-block login_btn btn btn-primary">
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
    margin-top:80px;
    
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
    <li><a href="../index.php">Home</a></li>
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
  }
?> 