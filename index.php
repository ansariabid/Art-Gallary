<?php
include ('../dbcon.php');
if(isset($_POST['btn']))
{
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];
  $sql="select * from admin where email='$email'";
  $x=mysqli_query($con,$sql);
    if($r=mysqli_fetch_assoc($x))
    {
      $dbpswd=$r['pswd'];
      if($dbpswd==$pswd)
        session_start();
      $_SESSION['email']=$email;
      header("location:dashboard.php");
    }
    else
    {
      echo"invalid password";
    }
  }
  
?>



<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="../boot.css">
    <script src="../boot.js"></script>
    <script src="../boot1.js"></script>
    <script src="../boot2.js"></script>


    <title>Login</title>

  </head>
  <body style="background-image: linear-gradient(45deg,blue,white)">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    <h1 class="text-center mt-4">LOGIN PANEL ADMIN</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']?>"method="post" class="border p-5 m-5">
        
  <div class="form-group">
  <label for="email">Email Address</label>
  <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
  </div>
  <div class="form-group">
  <label for="pswd"> Password</label>
  <input type="password" name="pswd" id="pswd" placeholder="Enter Password" class="form-control">
  </div>
  <div class="form-group text-center">
<button type="submit" name="btn" class="btn btn-outline-success">LOGIN</button>
</div>
  </form>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12"></div>
  </div>
</div>
  </body>
</html>