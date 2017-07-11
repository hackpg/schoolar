<?php require 'conn.inc.php'?>
 <!DOCTYPE html>
 <html>
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
                        <li><a href="#tf-service">Result</a></li>
                        <li><a href="#tf-portfolio">Staff</a></li>
                        <li><a href="#tf-about">About</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>





             <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="teacher-dashboard.php" method="POST">
                    <h1 style="text-align: center;font-family: sans-serif;">Add Profile Content</h1><hr>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact" name="number">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Qualification" name="username">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" name="username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                      </div>
                      <button type="submit" class="btn btn-primary my-btn dark">Submit</button>
                    </form>
                </div>
             </div>


 </body>
 </html>  