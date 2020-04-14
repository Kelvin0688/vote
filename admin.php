<?php include('admin_server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN_LOGIN</title>

  <!-- Bootstrap styles for this project-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="form_login.css" rel="stylesheet">
</head>

<body style="background-color: whitesmoke;">
<br><br><br><br>
  <div class="login_form col-lg-8 col-md-6 col-sm-12 offset-lg-2 offset-md-3"> 
    
      
      <h3 class="text-center text-danger">Online Election Voting System</h3>
      <hr>
      <h4 class="text-center text-primary">LogIn</h4>
      <h4 class="text-center text-primary">Administrator</h4>
      <hr>
       <form class="user" action="admin.php" method="POST">
       <center><div class="error"><?php include('errors.php'); ?></div>

    <br>
    </center>
      <div class="form-group">
        <label>Username</label>
      <input type="text" placeholder="Enter Username" name="username" class="form-control form-control-user" required="">
      </div>
      <div class="form-group">
        <label>Password</label>
      <input type="password" placeholder="Enter password" name="password" class="form-control form-control-user" required="">
      </div>
      <div class="form-group">
      <div class="col-lg-12 col-md-6 col-sm-6">
      <button class="form-control btn btn-primary btn-block" name="login_admin">login</button>
      </div>
      
      </div>
    </form>
    <br>
    <center>

      <a style="color: blue;
      font-size: 18px;
      font-family: arial;
      text-shadow: black;
      text-decoration: none; " href="index.php"><< Back</a>
    </center>

    <br>
   
  </div>

    

 
  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
