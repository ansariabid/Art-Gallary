<?php
include ("dbcon.php");
if(isset($_POST['btn']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mob=$_POST['mobile'];
  $pswd=$_POST['pswd'];
  $address=$_POST['address'];
  $sql="insert into customer(name,email,mob,pswd,address)values('$name','$email','$mob','$pswd','$address')";
  if(mysqli_query($con,$sql))
  {
    echo "registration successfully";
  }
  else
  {
    echo"error";
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1,shrink-to-fit=no">
    
<link rel="stylesheet" type="text/css" href="boot.css">
<script src="boot.js"></script>
  <script src="boot1.js"></script>
  <script src="boot2.js"></script>

<title>Registration</title>

  </head>
  <body style="background-image: linear-gradient(45deg,blue,white)">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    <h1 class="text-center mt-4">Registration</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="border p-5 m-5">
  <div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
  </div>
  <div class="form-group">
 <label for="email">Email</label>
  <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
  </div>
  <div class="form-group">
  <label for="mobile">Mobile</label>
  <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile " class="form-control">
  </div>
        <div class="form-group">
          <label for="pswd">Password</label>
          <input type="password" name="pswd" id="pswd" placeholder="Enter Password" class="form-control">
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter Address" class="form-control"></textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-outline-success" name="btn">SUBMIT</button>
          <button type="reset" class="btn btn-outline-warning">CLEAR</button>
        </div>
      </form>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
  </div>
</div>

  </body>
</html>