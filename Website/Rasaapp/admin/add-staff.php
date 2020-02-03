<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

//Code for Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $nic=$_POST['nic'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $phone=$_POST['fname'];
	$email=$_POST['email'];
	$msg=mysqli_query($con,"insert into staff(fname,lname,nic,gender,address,phone,email) values('$fname','$lname','$nic','$gender','$address','$phone','$email')");
if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Users</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
              	  	
                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Users</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="add-staff.php" >
                          <i class="fa fa-users"></i>
                          <span>Add staff members</span>
                      </a>
                  </li>
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add staff members</h3>
				<div class="row">           
                  <div class="col-md-12">
                  <form name="registration" method="post" action="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">First name</label>
                        <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="John">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last name</label>
                        <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="Calton">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIC</label>
                        <input type="text" name="nic" class="form-control" id="exampleFormControlInput1" placeholder="199540019300">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" name="gender" id="exampleFormControlSelect1">
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Moratuwa">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="0779876544">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>