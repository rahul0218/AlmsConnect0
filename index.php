<?php
    require_once "user/config.php";
	//session_start();
	$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
	if (isset($_SESSION['access_token'])) {
		header('Location: user/index.php');
		exit();
	}
	if(isset($_SESSION['id'])!="")
    header('Location: user/uprofile.php');
    
  if(isset($_SESSION['oid'])!="")
		header('Location: org/index.php');

  $loginURL = $gClient->createAuthUrl();
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
  <!--For Date-->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- Date end-->
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/footer.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/loader.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/donation.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/clock1.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/orglogreg.css">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/team.css">
    <script src="bootstrap-4.3.1-dist/js/loader.js"></script>
    <script src="bootstrap-4.3.1-dist/js/clock1.js"></script>

    <title>ALMS CONNECT</title>
    <link rel="icon" href="image/logo.png" type="image/png">
    <script src="bootstrap-4.3.1-dist/js/scroll.js"></script>
    
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
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <a class="navbar-brand" href="#">
            <img src="image/logo.png" alt="Logo" style="width:100px;" >
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
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#ModalCenter">Organisation</button>
                  <!-- <a class="nav-link" href="#" data-target="#exampleModalCenter">Organisation</a>-->
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#Donate">Donate</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#Contact">Contact</a>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Login/Register
                  </button>&nbsp
                </li>
              </ul>
            </div>
        
        </div>
        </nav>
    
    </header>
<!--Loader Strart-->
    <div class="loader">
<div class="wapper">
  <h1 class="brand">
    <span>a</span>
    <span>l</span>
    <span>m</span>
    <span>s</span>
    <span></span>
    <span>c</span>
    <span>o</span>
    <span>n</span>
    <span>n</span>
    <span>e</span>
    <span>c</span>
    <span>t</span>
  </h1>
  </div>
</div>
<!--Loader End-->

<!--Organisation Modal Start-->
<!-- Modal -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="ModalCenterTitle">Organisation Login/Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Modal Body Start-->
        <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                    <h3>Welcome to</h3>
                    <img src="image/logo.png" alt="Logo" style="width:100px;" >
                        
                        <p>You can Login or register your Organization here</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login</h3>
                                    <form class="needs-validation" action="org/olog.php" method="post" novalidate>
                                        <div class="row register-form">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-6 ">
                                                <!--Email-->
                                                <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                                                        </div>
                                                        <input type="mail" class="form-control" name="omail" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                <!--Password-->
                                                <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" id="pwd" name="opwd"  placeholder="Password" data-toggle="password"  pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <input type="submit" class="btnRegister" name="submit" value="Login"/>
                                            </div>
                                            
                                        </div>
                                    </form>
                            </div>

                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Signup</h3>
                                   <!--Script for match password and cnfpwd start-->
                                   <script type="text/javascript">
                                        var password = document.getElementById("opwd")
                                        , confirm_password = document.getElementById("ocpwd");
                                        function validatePassword(){
                                          if(password.value != confirm_password.value) {
                                          confirm_password.setCustomValidity("Passwords Don't Match");
                                          } else {
                                          confirm_password.setCustomValidity('');
                                          }
                                        }
                                        password.onchange = validatePassword;
                                        confirm_password.onkeyup = validatePassword;
                                    </script>
                                    <!--Script for match password and cnfpwd end-->
                                    <!--Get Item from db start-->
                                    <script>
                                        function validate()
                                        {
                                          var udtype=document.getElementsByName("udtype[]");
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
                                          alert("Select the item what your organization will support for donation");
                                          return false;
                                          }  
                                          else
                                          {
                                          return true;  
                                          }
                                        }
                                      </script>
                                    <!--Get Item from db end-->
                                <form class="needs-validation" action="org/ortrv.php" method="post" onsubmit="return (validate() && validatePassword())" novalidate>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <!--Org Name-->
                                            <div class="input-group form-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-building-o"></i></span>
                                              </div>
                                              <input type="text" class="form-control" id="name" placeholder="Organisation Name" name="oname" maxlength="40" required>
                                              <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <!--Registration Number-->
                                            <div class="input-group form-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                                              </div>
                                              <input type="text" class="form-control" id="idno" placeholder="Registration Number" name="ono" maxlength="10" required>
                                              <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <!--Email-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="email" placeholder="Email" name="omail" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <!--Phone-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="tel" maxlength="10" minlength="10" class="form-control" id="phone" placeholder="Phone" name="ophno" pattern="^\d{10}$" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <!--Date-->
                                            <div class="input-group form-group">
                                              <input type ="date" name="odate" placeholder="Date of establishment" class="form-control" required/>
                                              <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calender"></i></span>
                                                </div>
                                                
                                            </div>

                                        </div>
                                       

                                        <div class="col-md-6">
                                            <!--Password-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Password" data-toggle="password" name="opwd" id="opwd"  maxlength="30" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            
                                            <!--Confirm Password-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Confirm Password" data-toggle="password" name="ocpwd" id="ocpwd"  maxlength="30" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <!--Address-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                </div>
                                                <textarea class="form-control" id="validationTextarea" placeholder="Required address" style="resize:none" name="oadd" required></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter your address in the textarea.
                                                </div>
                                            </div>
                                            <!--Answer-->
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-question-circle-o"></i></span>
                                                </div>
                                                <textarea class="form-control" id="validationTextarea" name="orj" placeholder="Reason for Joining" style="resize:none"></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div>
                                            </div>
                                            
                                            
                                        </div>

                                        <!--Type of Donation-->
                                          <div class="input-group form-group">
                                              <div class="row">
                                              
                                                  <div class="col-md-2">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-handshake-o"></i></span>
                                                      </div>
                                                  </div>

                                                  <?php
                                                    include "conn.php";
                                                    $iname="select iid,ditem from ditem where istatus='Active'";
                                                    $citem = mysqli_query($conn,$iname);
                                                    while($row=mysqli_fetch_array($citem))
                                                    {
                                                    ?>
                                                      <div class="col">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" name="udtype[]" id="inlineCheckbox1" value="<?php echo $row['ditem'];?>">
                                                              <label class="form-check-label" for="inlineCheckbox1"><?php echo $row['ditem'];?></label>
                                                          </div>
                                                      </div>
                                                	<?php
                                                    }?>
                                                    
                                                </div>
                                          </div>
                                          <!--Type of Donation End -->
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6"></div>
                                          <div class="col-md-6">
                                              <input type="submit" name="s" class="btnRegister" Style="margin-bottom:50px; margin-right:90px;" value="Register"/>
                                          </div>
                                        </div>
                                      
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!--Modal BOdy End-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!--Organisation Modal End-->
<!--Login Modal start-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <img src="image/logo.png" alt="Logo" style="width:80px;">
        <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form class="needs-validation" action="user/ulog.php" method="post" novalidate>
					<!--Username-->
          <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                </div>
                <input type="mail" class="form-control" id="email" name="uname" placeholder="Username/Email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
					<!--Password-->
          <div class="input-group form-group">
                <div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="upwd"  placeholder="Password" data-toggle="password" value="" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </div>
                <div class="valid-feedback">Looks good!</div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <p><a href="user/ufpwdfrm.php">Forget Password?</a></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-sm">
                <input type="submit" value="Login" class="btn float-middle login_btn btn btn-primary" onclick="return validateform()" name="submit">
                </div>
                <div class="col-sm">
                  <p>Or Login with</p>
                </div>
              <div class="col-sm">
                <div class="input-group form-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-google"></i></span>
                      </div>
                      <a href="<?php echo $loginURL ?>" style="text-decoration:none">
  
                    <button type="button" class="btn btn-primary">Google</button>
    
			            </a>
                </div>
              </div>
            </div>
					</div>
          
          
          
				</form>
        

      </div>
      <div class="modal-footer">
            <p>Don't have account?</p>
        <button type="button" class="btn btn-primary" data-dismiss="modal"data-toggle="modal" data-target="#exampleModalScrollable">
                 Create
                </button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
        
      </div>
    </div>
  </div>
</div>

<!--Modal End-->

<!--User Register Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--body-->
        <!--Script for match password and cnfpwd start-->
        <script type="text/javascript">
            var password = document.getElementById("upwd")
            , confirm_password = document.getElementById("ucpwd");
            function validatePassword(){
              if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
              } else {
              confirm_password.setCustomValidity('');
              }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
        <!--Script for match password and cnfpwd end-->
        <form class="needs-validation" action="user/urtrv.php" method="post" onsubmit="validatePassword()" novalidate>
            <!--Name-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
				          <input type="text" class="form-control" id="uname" name="uname" maxlength="60" minlength="5" placeholder="Name" value="" required>
                <div class="valid-feedback">Looks good!</div>
			        </div>
            <!--Email-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                </div>
                <input type="text" class="form-control" id="umail" name="umail" maxlength="50" placeholder="Email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Phone-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
					      <span class="input-group-text"><i class="fa fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" id="uphone" placeholder="Phone" name="uphno" value="" maxlength="10" pattern="^\d{10}$" required>
              <div class="valid-feedback">Looks good!</div>
            </div>
             <!--Profession-->
             <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                </div>
                <input type="text" class="form-control" id="uprfsn" name="uprfsn" maxlength="30" placeholder="Profession" value="" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
             <!--Age-->
             <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
                </div>
                <input type="text" class="form-control" id="age" placeholder="uage" name="uage"  maxlength="3" min="18" value="" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Gender-->
          <div class="input-group form-group">
            <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-mars"></i></span>    
              <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name = "ugen" value="Male" id="customRadioInline1" class="custom-control-input" required>
                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name = "ugen" value="Female" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name = "ugen" value="Other" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">Other</label>
                      </div>
                    </div>
                  </div>
              </div>
             </div>
          </div>
          
<!--Gender end-->

            <!--Password-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="upwd" name="upwd"  placeholder="Password" data-toggle="password" value="" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </div>
                <div class="valid-feedback">Looks good!</div>
            </div>
            
            <!--Confirm Password-->
            <div class="input-group form-group">
                <div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="ucpwd" name="ucpwd" placeholder="Confirm Password" data-toggle="password" value="" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </div>
                <div class="valid-feedback">Looks good!</div>
            </div>

             <!--Address-->
             <div class="input-group form-group">
                <div class="input-group-prepend">
					        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                </div>
                <textarea class="form-control" style="resize:none" name="uadd" id="validationTextarea" placeholder="Required address" required></textarea>
                <div class="invalid-feedback">
                Please enter a message in the textarea.
                </div>
            </div>
            <!--
            
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" required>
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            
            --><!--Script for ID Card Validation-->
            <script>
              function changeValue(dropdown) {
                  var option = dropdown.options[dropdown.selectedIndex].value,
                  field = document.getElementById('uidno');
                  if (option == 'Aadhar Card') {
                    field.maxLength = 12;
                    //field.minLength = 12;
                  }
                  else{
                    field.value = field.value.substr(0,10);
                    field.maxLength = 10;
                    //field.minLength = 10;
                  }
                }
                </script>
                <!--Script for ID Card Validation end-->
                <!--Script for SQA1, SQA2-->
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
            <!--Script for SQA1, SQA2 end-->

            <!--ID Card-->
            <div class="form-group">
                <select class="custom-select" id = "usel" name = "usel" onchange="changeValue(this);" required>
                  <option value = "">Select Your ID Card Type</option>
                  <option value = "Aadhar Card">Aadhar Card</option>
                  <option value = "Voter Card">Voter Card</option>
                  <option value = "PAN Card">PAN Card</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
            <!--ID Card Number-->
            <div class="input-group form-group">
				      <div class="input-group-prepend">
					      <span class="input-group-text"><i class="fa fa-id-card"></i></span>
              </div>
				      <input type="text" class="form-control" id="uidno" name="uidno" maxlength="12" placeholder="ID Number" value="" required>
              <div class="valid-feedback">Looks good!</div>
			      </div>
            <!--Security1-->
            <div class="form-group">
                <select class="custom-select" id = "uq1" name = "uq1" required>
                  <option value = "">Select Your First Security Question</option>
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
                <input type="text" class="form-control" id="ua1" onkeyup="show1()" name="ua1" value="" minlength="10" maxlength="40" placeholder="Answer of question 1." value="" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <!--Security2-->
            <div class="form-group">
                <select class="custom-select" id = "uq2" name = "uq2" required>
                  <option value = "">Select Second Security Question</option>
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
            <!--Answer2-->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-comment-o"></i></span>
              </div>
				      <input type="text" class="form-control" onkeyup="show2()" placeholder="Answer of question 2." value="" id="ua2" name="ua2" value="" minlength="10" maxlength="40" required>
              <div class="valid-feedback">Looks good!</div>
			      </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to <a href="terms-conditions.html" target="_blank">terms and conditions.</a>
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
        </form>
        <!--body end-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->

      </div>
    </div>
  </div>
</div>
<!--Registration Modal End-->
 <!--Script for Login & Registration Start-->

  <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap-show-password.js"></script>
  <script type="text/javascript" src="bootstrap-4.3.1-dist/js/pwd.js"></script>
  <script type="text/javascript" src="bootstrap-4.3.1-dist/js/fvalidation.js"></script>

<!--Script for Login & Registration End-->

<!--Image Slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="image/1.jpg" width="1100" height="600" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Heading 1</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="image/2.jpg" width="1100" height="600" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Heading 2 </h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="image/3.jpg" width="1100" height="600"  alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Heading 3</h5>
    <p>...</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Image Slider End-->



<!--Sections Start-->
          <!--Sections Donate-->
  <div class="main" id="Donate">
  <section class="dn" >
    <!--Donation Start-->
<div class="container">
    <div class="row">
        <div class="col-md-6 dn-dv">
            <h1 class="text-center">Donation</h1>
            <p class="text-justify-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus risus velit, at varius purus bibendum et. Suspendisse potenti. Proin lectus mi, tincidunt ac consequat congue, ultrices non odio. Nullam eu laoreet diam, at eleifend odio. Vestibulum eu diam ante. Fusce vestibulum ullamcorper porttitor. Mauris tempor sit amet mauris ut sagittis. Fusce venenatis, mi sed consectetur consectetur, ipsum urna feugiat tellus, in dignissim est eros a lorem. Fusce id velit magna. Etiam at est ut turpis tristique congue. Etiam egestas blandit enim vel euismod. Nullam arcu purus, ultricies id tempor non, lacinia vel dui. Aenean pharetra enim purus, quis vehicula augue varius ac.</p>
        </div>
        <div class="col-md-6">
            <div class="container donate-form col-md-12 ">
            <form class="needs-validation" action="guest/gdonate_con.php" method="post" novalidate >
            <h1 class="text-center">Donation</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                  <div class="input-group form-group">
                  <input class="form-control border-secondary py-2" type="search"  id="i1" name="oname" placeholder="Search Organisation by Name, Location">
                  <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
            </div>
                <!--Name of Org-->
                <div class="form-group">
                            <select class="custom-select" name='oid' required>


                              <option value="">Choose Organization</option>

                              <?php
                                  include "conn.php";
                                  $oname="select oid, oname,oaccess from org where oaccess='Active' AND ositem!=''";
                                  $odt = mysqli_query($conn,$oname);

                                  if($odt==false)
                                    die(mysqli_error());
                                  while($row=mysqli_fetch_array($odt))
                                  {
                                      echo "<option value = '".$row['oid']."'>".$row['oname']."</option>";
                                  }?>
                               </select>

                            
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                        <!--Type of Donation--><!--
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-handshake-o"></i></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Food">
                                        <label class="form-check-label" for="inlineCheckbox1">Food</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Clothes">
                                        <label class="form-check-label" for="inlineCheckbox2">Clothes</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Medicine">
                                        <label class="form-check-label" for="inlineCheckbox3">Medicine</label>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--Address-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <textarea class="form-control" id="validationTextarea" placeholder="Required address" name="gadd" style="resize:none" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div>
                        </div>
                        <!--Email--><!--
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                            </div>
                            <input type="text" class="form-control" id="email" placeholder="Email" value="" required>
                            <div class="valid-feedback">Looks good!</div>
                        </div>-->
                        <!--Phone--><!--
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" maxlength="10" minlength="10" class="form-control" id="phone" placeholder="Phone" value="" required>
                            <div class="valid-feedback">Looks good!</div>
                        </div>-->
                        

                    <div class="form-group">
                        <input type="submit" value="Proceed" name="ds" class="btn-block login_btn btn btn-primary">
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

<!--Sections About-->
<div class="main" id="About">
  <section class="abt">
  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h1 style="color:white;">About</h1>
                        <hr>
                      </div>
                    </div>

                    <div class="row">
                      <div style="color:white;" class="col-md-12">
                        <p>About Website Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus risus velit, at varius purus bibendum et. Suspendisse potenti. Proin lectus mi, tincidunt ac consequat congue, ultrices non odio. Nullam eu laoreet diam, at eleifend odio. Vestibulum eu diam ante. Fusce vestibulum ullamcorper porttitor. Mauris tempor sit amet mauris ut sagittis. Fusce venenatis, mi sed consectetur consectetur, ipsum urna feugiat tellus, in dignissim est eros a lorem. Fusce id velit magna. Etiam at est ut turpis tristique congue. Etiam egestas blandit enim vel euismod. Nullam arcu purus, ultricies id tempor non, lacinia vel dui. Aenean pharetra enim purus, quis vehicula augue varius ac. </p>
                        <hr>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="heading-title text-center">
                        <h3 class="text-uppercase" style="color:white;">Team </h3>
                            
                        </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-3">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://pbs.twimg.com/profile_images/1058648905955586048/J589bj3T_400x400.jpg" alt="team member" class="img-responsive" style="border-radius: 50%;" width="150" height="150">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="color:white;">&nbsp&nbsp&nbsp&nbsp Rahul</h5>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://www.teacheron.com/uploadedFiles/UserProfilePicThumbnail/1/34/398.jpg?ts=1556394185000" alt="team member" class="img-responsive" style="border-radius: 50%;" width="150" height="150">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hello World</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="color:white;"> &nbsp Subhasish</h5>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://pbs.twimg.com/profile_images/1127118668029091841/T_AnHoTQ_400x400.jpg" alt="team member" class="img-responsive" style="border-radius: 50%;" width="150" height="150">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to design</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="color:white;">&nbsp&nbsp&nbsp&nbspTanmoy</h5>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://yt3.ggpht.com/a-/AN66SAx8O04O47spV9jeNq0lJLIkM0stHKXVcE5OTQ=s100-mo-c-c0xffffffff-rj-k-no" alt="team member" class="img-responsive" style="border-radius: 50%;" width="150" height="150"> 
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to design</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="color:white;">&nbsp&nbsp&nbsp&nbsp Pabitra</h5>
                                
                            </div>
                        </div>
                    </div>

                </div>

  </section>
</div>
<!--Sections About End-->

<!--Sections Contact-->
<div class="main" id="Contact">
  <section class="cn" >
  <div class="container contact-form">
  <form class="needs-validation" action="guest/acinsert.php" method="post" novalidate>

<h1 class="text-center">Contact Us</h1>
<hr>

    <div class="row">
        <div class="col-md-6">
            <p>Yahan pe kuchh likh dena h</p>
            <p>Yahan pe kuchh likh dena h</p>
            <p>Yahan pe kuchh likh dena h</p>
        </div>

        <div class="col-md-6">
    <!--Username-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="Full name" name="qname" minlength="5" maxlength="40" required>
            <div class="valid-feedback">Looks good!</div>
        </div>
    <!--Email-->
    <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="tel" class="form-control" id="email" placeholder="Email" name="qmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            <div class="valid-feedback">Looks good!</div>
        </div>

             <!--Phone-->
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-phone"></i></span>
          </div>
          <input type="text" class="form-control" id="phone" placeholder="Phone"name="qphno" maxlength="10"  pattern="^\d{10}$" required>
          <div class="valid-feedback">Looks good!</div>
        </div>
        <!--Question-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-question"></i></span>
            </div>
            <textarea class="form-control" id="validationTextarea" placeholder="Required your query (within 200 characters)" style="resize:none" name="query" required></textarea>
            <div class="invalid-feedback">
            Please enter your query in the textarea.
            </div>
        </div>

        <div class="form-group">
            <input type="submit" name="s" value="Send" class="btn-block login_btn btn btn-primary">
        </div>
      </div>
      
    </form>
    <div>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/fvalidation.js"></script>
<style>
.cn{
    background-image:url(sectionimage/cnbg.jpg);
    background-size:cover;
    padding-top:100px;
}
.dn{
    background-image:url(sectionimage/d.png);
    background-size:cover;
    padding-top:100px;
}
.abt{
    background-image:url(sectionimage/abt.jpg);
    background-size:cover;
    padding-top:100px;
}
hr{
    background:white;
}
.contact-form{
    background:rgba(0,0,0, .6);
    color:white;
    margin-top:0px;
    padding:20px;
    box-shadow:0px 0px 10px 3px gray;
}
.ft{
  background-image:url(image/fb.jpg);
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
        <p><img src="image/logo.png" alt="Logo" style="width:100px;" ></p>
        <p class="mb10">Yahan kya likhne e theek rhega? Any idea?</p>
        <p><i class="fa fa-location-arrow"></i> Kya Location dun? </p>
        <p><i class="fa fa-phone"></i>  +91-9330233447  </p>
        <p><i class="fa fa fa-envelope"></i> helptogethera@gmail.com  </p>


      </div>


    <div class=" col-sm-4 col-md  col-6 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
      <!--headin5_amrc-->
        <ul class="footer_ul_amrc">
          <li><a href="terms-conditions.html" target="_blank">Terms and Conditions</a></li>
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