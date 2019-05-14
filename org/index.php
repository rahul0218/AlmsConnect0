<?php
session_start();
include "../conn.php";
if(empty($_SESSION['oid'])){
    echo "<script> alert('Login to continue...!!!!') </script>";
   echo "<script> window.location.href='../index.php'</script>";
}
else{
  $id=$_SESSION['oid'] ? $_SESSION['oid'] : '';
  $upqr=mysqli_query($conn,"select * from org where oid='$id'");
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
  <!--For Date-->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- Date end-->
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/footer.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/loader.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/donation.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/clock1.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/team.css">
    <script src="../bootstrap-4.3.1-dist/js/loader.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/clock1.js"></script>

    <title>Organisation</title>
    <link rel="icon" href="../image/logo.png" type="image/png">
    <script src="../bootstrap-4.3.1-dist/js/scroll.js"></script>
    <script>
      function printFunction() {
        window.print();
      }
    </script>
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
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $n['oname'];?>
                    </a>
                    &nbsp&nbsp&nbsp
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        
                        
                        <a class="dropdown-item" href="dupreqst.php" title="Request to Admin for update Donaton Items" >Request to Admin</a>
                        <a class="dropdown-item" href="#" data-toggle="dropdown">Donation Record</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Userdonationrecord">User</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#guestdonationrecord">Guest</a>
                            </div>
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="ochngpwd.php">Change Password</a>
                        <a class="dropdown-item" href="oupdt.php" >Edit Profile</a>
                        
                    
                    </div>
                </li>
               
                <li class="nav-item">
                  
                    <a href="ologout.php"><span class="input-group-text" style="border-radius:50px; margin-top:7px;"><i class="fa fa-power-off"></i></span></a>
                  
                </li>
            </ul>
          </div>
        </nav>
    
    </header>



 <!--Script for Login & Registration Start-->

 <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap-show-password.js"></script>
            <script type="text/javascript" src="bootstrap-4.3.1-dist/js/pwd.js"></script>
            <script type="text/javascript" src="../bootstrap-4.3.1-dist/js/fvalidation.js"></script>

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
      <img class="d-block w-100 h-50" src="../image/1.jpg" width="1100" height="600" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Heading 1</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="../image/2.jpg" width="1100" height="600" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Heading 2 </h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="../image/3.jpg" width="1100" height="600"  alt="Third slide">
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
  <form class="needs-validation" name="form1" action ="ocinsert.php" method = "POST" novalidate>

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
              <input type="text" class="form-control" id="oname" name="oname" placeholder="Full name" value="<?php echo $n['oname'];?>" disabled>
              <div class="valid-feedback">Looks good!</div>
          </div>
      <!--Email-->
      <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" id="omail" name="omail" placeholder="Email" value="<?php echo $n['omail'];?>" disabled>
              <div class="valid-feedback">Looks good!</div>
          </div>

              <!--Phone-->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" id="ophno" name="ophno" placeholder="Phone" value="<?php echo $n['ophno'];?>" disabled>
            <div class="valid-feedback">Looks good!</div>
          </div>
          <!--Address-->
          <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                  </div>
                  <textarea class="form-control" style="resize:none" name="query" id="validationTextarea" placeholder="Required Query" required></textarea>
                  <div class="invalid-feedback">
                  Please enter a message in the textarea.
                  </div>
          </div>

          <div class="form-group">
              
              <input type="button" value="Show previous query" class="login_btn btn btn-info"data-toggle="modal" data-target="#orgquery">
              <input type="submit" name="osubmit" value="Send" class="login_btn btn btn-primary">
              
          </div>
        </div>
      
    </form>
    <div>
<!--Contact section End-->
<!--Gest Donation Record Modal Start-->
<!-- Modal -->
<div class="modal fade" id="guestdonationrecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" style="color:black;" id="exampleModalScrollableTitle">Guest Donation Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Modal body Start-->
        <?php
          $qry=mysqli_query($conn,"select gdid,gdtype,gadd,gphno,gdstatus,gdcstatus,gdtime,gdctime from gdonate where gdid in(select gdid from gdonate where oid='$id')");
          $r=mysqli_num_rows($qry);
          if($r==0){?>
            <h3 class="text-center" style="color:black; size:5px;">No Donations made yet</h3>
            <?php	
            }else{?>
                  <table class="table">
              <thead>
              <tr>
                <th scope="col"> Donation ID</th>
                <th scope="col"> Address </th>
                <th scope="col"> Phone No </th>
                <th scope="col"> Donation type </th>
                <th scope="col"> Donation Request On</th>
                <th scope="col"> Status </th>
                <th scope="col"> Change Status </th>
              </tr>
              </thead>
              <tbody>
              <?php
                while($b=mysqli_fetch_array($qry))
                {
                  ?>
                  <tr>
                  <td scope="row"><strong>G<?php echo $b['gdid']; ?></strong> </td>
                  <td> <?php echo $b['gadd']; ?> </td>
                  <td> <strong><?php echo $b['gphno']; ?><strong> </td>
                  <td> <?php echo $b['gdtype']; ?> </td>
                  <td> <?php echo $b['gdtime']; ?> </td>
                  <td > <?php if($b['gdstatus']=="Pending" && $b['gdcstatus']=="Waiting" ) 
                  {echo "<font color='red'>Request ".$b['gdstatus']."</font>";}
                  elseif($b['gdstatus']=="Processed" && $b['gdcstatus']=="Waiting" ){echo "<font color='blue'>Request ".$b['gdstatus']."</font>";}
                  elseif($b['gdstatus']=="Processed" && $b['gdcstatus']=="Donated" ){echo "<font color='green'>".$b['gdcstatus']." on ".$b['gdctime']."</font>";} 
                  ?> </td>
                  <td > <a href ="ogdstatus.php?gdid=<?php echo $b['gdid'];?>&gdstatus=<?php echo $b['gdstatus'];?>&gdcstatus=<?php echo $b['gdcstatus'];?>" style="text-decoration:none"><img src="../icon/d_status.png"></a></td>
                  <?php
                }
                ?>
                </tr>
          
              </tbody>
            </table>
            <?php
          }?>

<!--Modal body End-->
      </div>

      
      <div class="modal-footer">
      <button class="btn btn-primary" onclick="printFunction()">Print</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--Gest Donation Record Modal End-->

<!--User Donation Record Modal Start-->



<!-- Modal -->
<div class="modal fade" id="Userdonationrecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" style="color:black;" id="exampleModalScrollableTitle">User Donation Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Modal body Start-->
        <?php
        $qr=mysqli_query($conn,"select uid,uname,uadd,umail,uphno,uprfsn,did,dtype,dstatus,dcstatus,udtime,udctime from user natural join udonate where did in(select did from udonate where oid='$id')");
        $r=mysqli_num_rows($qr);
        if($r==0){?>
        <h3 class="text-center" style="color:black; size:5px;">No Donations made yet</h3>
        <?php	
        }else{?>
          <table class="table">
          <thead>
          <tr>
            <th scope="col">Donation ID</th>
            <th scope="col"> Name </th>
            <th scope="col"> Address </th>
            <th scope="col"> Email </th>
            <th scope="col"> Phone no. </th>
            <th scope="col"> Donation type </th>
            <th scope="col"> Donation Request On</th>
            <th scope="col"> Status </th>
            <th scope="col"> Change Status </th>
            </tr>
          </thead>
          <tbody>
    
            <?php
              while($a=mysqli_fetch_array($qr))
              {
              ?>
              <tr>
              <td scope="row"> <strong>U<?php echo $a['did']; ?></strong> </td>
              <td> <strong><?php echo $a['uname']; ?></strong> </td>
              <td> <?php echo $a['uadd']; ?> </td>
              <td> <strong><?php echo $a['umail']; ?></strong> </td>
              <td> <strong><?php echo $a['uphno']; ?></strong> </td>
              <td> <?php echo $a['dtype']; ?> </td>
              <td> <?php echo $a['udtime']; ?> </td>
              <td> <?php if($a['dstatus']=="Pending" && $a['dcstatus']=="Waiting" ) 
              {echo "<font color='red'>Request ".$a['dstatus']."</font>";}
              elseif($a['dstatus']=="Processed" && $a['dcstatus']=="Waiting" ){echo "<font color='blue'>Request ".$a['dstatus']."</font>";}
              elseif($a['dstatus']=="Processed" && $a['dcstatus']=="Donated" ){echo "<font color='green'>".$a['dcstatus']." on ".$a['udctime']."</font>";} 
              ?> </td>
              <td> <a href ="oudstatus.php?did=<?php echo $a['did'];?>&dstatus=<?php echo $a['dstatus'];?>&dcstatus=<?php echo $a['dcstatus'];?>" style="text-decoration:none"><img src="../icon/d_status.png"></a></td>
              <?php
              }
              ?>
          </tr>
    
    
      </tbody>
</table>
<?php
}
?>
<!--Modal body End-->
      </div>

      
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="printFunction()">Print</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--User Donartion Record Modal End-->
<!--Org Query Modal Start-->
<!-- Modal -->
<div class="modal fade" id="orgquery" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" style="color:black;" id="exampleModalScrollableTitle">Asked Query Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
      $qname=$n['oname'];
      $qmail=$n['omail'];
      $qphno=$n['ophno'];
      $qr1=mysqli_query($conn,"select * from acontact where qtype='Org' AND qname='$qname' AND qmail='$qmail' AND qphno='$qphno' order by qid desc");
      $r=mysqli_num_rows($qr1);
      ?>
      <?php
      if($r!=0){?> 
        <!--Modal body Start-->
      <table class="table">
        <thead>
          <tr>
          <th scope="col"> Id </th>
          <th scope="col"> Query </th>
          <th scope="col"> Asked On </th>
          <th scope="col"> Query Status</th>
          <th scope="col"> Solved By</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($a=mysqli_fetch_array($qr1))
            {
              ?>
              <tr>
              <td scope="row">Qid<?php echo $a['qid']; ?> </td>
              <td> <strong><?php echo $a['query']; ?></strong> </td>
              <td> <?php echo $a['qatime']; ?> </td>
              <td><?php if($a['qstatus']=="Unsolved") 
              {echo "<font color='red'>"."Still pending for solution"."</font>";}
              else echo "<font color='blue'>".$a['qstatus']." on ".$a['qstime']."</font>"  ?> </td>
              <td><?php if($a['qsbaname']=="") 
              {echo "Waiting for response";}
              else{?>
              <?php
              echo "Admin : "."<font color='green'>";?><?php $aname=$a['qsbaname'];
              $qry1=mysqli_query($conn,"select amail from admin where aname='$aname'");
              $admin=mysqli_fetch_array($qry1);
              echo $aname." (".$admin['amail'].")";
              ?><?php echo "</font>"?> </td>
              <?php
              }
            }
          ?>
            </tr>
      </tbody>
    </table>
    <?php
    } 
    else{?>
    <h3 class="text-center" style="color:black; size:5px;">This organization have not asked any queries yet</h3>
    <?php	
    }?>

<!--Modal body End-->
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!--Org Query Modal End-->




<script type="text/javascript" src="bootstrap-4.3.1-dist/js/fvalidation.js"></script>
<style>
.cn{
    background-image:url(../sectionimage/cnbg.jpg);
    background-size:cover;
    padding-top:100px;
}

.abt{
    background-image:url(../sectionimage/abt.jpg);
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
}
?>