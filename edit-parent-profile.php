<?php
session_start();
print($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schoolar</title>
  
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    
  </head>
  <body>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.html" style="font-size: 30px;">Schoolar</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        <li><a href="#tf-service">MyBatch</a></li>
                        <li><a href="#tf-portfolio">View Result</a></li>
                        <li class="active"><a href="#tf-portfolio">Register Parent</a></li>
                          <li><a href="#tf-about">About</a></li>
                          <li><a href="signup.php">Profile</a></li>
                        <li><a href="#tf-about">Logout</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="edit-parent-profile.php" method="POST">
                    <h1 style="text-align: center;font-family: sans-serif;">Fill Profile</h1><hr>

                       <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
                      </div>

                       <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter address" name="address">
                      </div>

                       <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter contact" name="contact">
                      </div>

                       <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Student name" name="studentname">
                      </div>

                       <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter occupation" name="occupation">
                      </div>
                       <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                      </div>
                      <button type="submit" class="btn btn-primary my-btn dark">Signup</button>
                    </form>
                </div>
             </div>
             <?php
require 'conn.inc.php';
if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email'])&& isset($_POST['contact'])&& isset($_POST['studentname'])&& isset($_POST['occupation']))
{
    $username= $_SESSION['username'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $studentname=$_POST['studentname'];
    $occupation=$_POST['occupation'];
    $email1=mysqli_real_escape_string($conn,$_POST['email']);
    if(!empty($username)&&!empty($name)&&!empty($address)&&!empty($contact)&&!empty($studentname)&&!empty($occupation)&&!empty($email1))
    {
      $q = "INSERT INTO `parent` (`id`, `name`, `address`, `contact`, `studentname`, `Occupation`, `username`, `email`) VALUES (NULL, '$name', '$address', '$contact', '$studentname', '$occupation', '$username', '$email')";

      if($conn->query($q)===TRUE)
      {
       echo "<script type='text/javascript'>alert('Parent Successfully registered')</script>";
      }      
      else
      {
        echo $conn->error;
       echo "<script type='text/javascript'>alert('Not Successful')</script>";
      }
    }
    else{
      echo "<script type='text/javascript'>alert('Fill Form Correctly')</script>";
    }
    $conn->close();
}

?>
</body>
</html>