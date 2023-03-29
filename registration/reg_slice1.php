<?php
session_start();
ob_start();
?>

<html>

<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
      <link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all" />

      <script src="js/slice1.js"></script>
</head>

<?php

$var = $_GET['var'];
$_SESSION['a'][5] = $_GET['var'];
$_SESSION['layer1'] = $_GET['var'];

?>

<body>
      <!--Main Header-->
      <nav class="navbar navbar-default">
            <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                              <li class="active">
                                    <a href="../index.html">Home</a>
                              </li>
                              <li>
                                    <a href="../about.html">About Us</a>
                              </li>
                              <li>
                                    <a href="#">Service</a>
                              </li>
                              <li>
                                    <a href="#">Gallery</a>
                              </li>
                              <li>
                                    <a href="#">Blog</a>
                              </li>
                              <li>
                                    <a href="../contact.html">Contact Us</a>
                              </li>
                        </ul>
                  </div>
                  <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
      </nav>
      <!--End Main Header -->

      <div class="signupform">
            <div class="container">
                  <div class="agile_info">
                        <div class="login_form">
                              <div class="left_grid_info">
                                    <h1>Manage Your User Account</h1>
                                    <p>This system provides high security to your account through the graphical password.</p><br>
                                    <img class="im1" src="../images/cover.jpg" height="270" width="370">
                              </div>
                        </div>
                        <div class="login_info">
                              <h2>Create New Account</h2>
                              <p class="account1">Following is the 1st image you chose.</p>
                              <img src=<?php echo $var; ?> onload="changeIt(this)" height="100" width="100">
                              <p class="account">Select one from below four parts.</p>
                              <center>
                                    <div class="test" id="test"></div>
                              </center>
                        </div>
                  </div>
            </div>

      </div>



      <script src="plugins/jquery.js"></script>
      <script src="plugins/bootstrap.min.js"></script>
      <script src="plugins/bootstrap-select.min.js"></script>

      <script src="plugins/validate.js"></script>
      <script src="plugins/wow.js"></script>
      <script src="plugins/jquery-ui.js"></script>
      <script src="js/script.js"></script>
</body>

</html>