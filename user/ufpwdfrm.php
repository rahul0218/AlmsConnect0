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

    <title>Update Profile</title>
    <link rel="icon" href="image/logo.png" type="image/png">
    <script src="../bootstrap-4.3.1-dist/js/scroll.js"></script>
    
 <style>
body, html, .main {
  
}

section {
  min-height: 100px;
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
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
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
            <!--Script for chng SQA1 & SQA2 in uper case start-->\
            <script>
                function show1()
                {
                var x = document.getElementById("ua1");
                x.value = x.value.toUpperCase();
                }
                function show2()
                {
                var y = document.getElementById("ua2");
                y.value = y.value.toUpperCase();
                }
            </script>
            <!--Script for chng SQA1 & SQA2 in uper case end-->
            <form class="needs-validation" action ="ufpwdfrm_react.php" method ="POST" novalidate>
            <h1 class="text-center">User Verifiation Form</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                  
            <!--Email-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="Email" name="umail"  maxlength="50" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Phone-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
					      <span class="input-group-text"><i class="fa fa-phone"></i></span>
              </div>
              <input type="tel" class="form-control" id="phone" name="uphno" maxlength="10"  pattern="^\d{10}$" placeholder="Phone" required>
              <div class="valid-feedback">Looks good!</div>
            </div>
           <!--Security1-->
           <div class="form-group">
                <select class="custom-select" id = "uq1" name = "uq1" required>
                  <option value = "">Give Your First Security Question</option>
                  <option value = "1">What is your first mobile number ?</option>
                  <option value = "2">What is the name of your first school ?</option>
                  <option value = "3">What is your favorite movie ?</option>
                  <option value = "4">What is your favorite color ?</option>
                  <option value = "5">What is your birth place ?</option>
                  <option value = "6">Who is your favourite school teacher ?</option>
                  <option value = "7">What is your gaming nick name ?</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <!--Answer1-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-comment-o"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Answer of question 1."onkeyup="show1()" id="ua1" name="ua1" minlength="10" maxlength="40" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Security2-->
            <div class="form-group">
                <select class="custom-select" id = "uq2" name = "uq2" required>
                  <option value = "">Give Your Second Security Question</option>
                  <option value = "8">Who is your favourite poet ?</option>
                  <option value = "9">What is your favourite actor ?</option>
                  <option value = "10">What is your first crush ?</option>
                  <option value = "11">What is your favourite food ?</option>
                  <option value = "12">What is your favourite movie seen in hall ?</option>
                  <option value = "13">what is your favourite social media platform </option>
                  <option value = "14">What is your first mobile brand ?</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <!--Answer1-->
            <div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-comment-o"></i></span>
                </div>
				<input type="text" class="form-control" placeholder="Answer of question 2." onkeyup="show2()" id="ua2" name="ua2" minlength="10" maxlength="40" required>
                <div class="valid-feedback">Looks good!</div>
			</div>

           <!---->
                    <div class="form-group">
                        <input type="submit" name="submit" value="Verify" class="btn-block login_btn btn btn-primary">
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
    margin-bottom:0px;
    
}
body{
    margin-top:50px;
    
}
hr{
    background:white;
}
.contact-form{
    height: 50px;
    background:rgba(0,0,0, .6);
    color:white;
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