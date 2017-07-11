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
                        <li><a href="register-parent.php">Register Parent</a></li>
                          <li><a href="#tf-about">About</a></li>
                          <li><a href="teacher-profile.php">View Profile</a></li>
                           <li><a href="edit-profile-teacher.php">Edit Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

 <?php
require 'conn.inc.php';
        $username=$_SESSION['username'];
      $q = "SELECT `name`,`address`,`contact`,`email`,`occupation`,`degree` FROM `teacher` WHERE `username`='$username'";
      $result=$conn->query($q);

      if($result->num_rows>0)
      {
        $row=$result->fetch_assoc();
       echo '<h2 style="text-align:center;">Profile</h2>'   ;
       echo "<h3>Name:</h3><p>".$row['name']."</p>";
       echo "<h3>Address:</h3><p>".$row['address']."</p>";
       echo "<h3>Contact:</h3><p>".$row['contact']."</p>";
       echo "<h3>Email:</h3><p>".$row['email']."</p>";
       echo "<h3>Occupation:</h3><p>".$row['occupation']."</p>";
       echo "<h3>Associated Degree:</h3><p>".$row['degree']."</p>";
      }      
      else
      {
        echo $conn->error;
       echo "<script type='text/javascript'>alert('No Results Found.pls go to edit profile and fill in data')</script>";
      }
    $conn->close();


?>
</body>
</html>