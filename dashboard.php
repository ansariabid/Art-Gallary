<?php
session_start();
include("../dbcon.php");
?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="../boot.css">
    <script src="../boot.js"></script>
    <script src="../boot1.js"></script>
    <script src="../boot2.js"></script>

    <title>dashboard</title>
 </head>
  <body style="">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
    <h5 class="h5">welcome <?php echo $_SESSION['email'];?></h5>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-right">
    <a href="logout.php" class="btn btn-warning btn-sm">LOGOUT</a>
    </div>
</div>
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="nav flex-column">
    <div class="nav-item">
    <a href="customer.php"= class="nav-link">customer</a>
    </div>

    <div class="nav-item">
    <a href="painting.php" class="nav-link">painting</a>
    </div>

    <div class="nav-item">
    <a href="order.php" class="nav-link">order</a>
    </div>

    <div class="nav-item">
    <a href="transaction.php" class="nav-link">transaction</a>
    </div>
</div></div>

    <div class="col-lg-4 col-md-4 col-sm-12 bg-info">



        <?php
        $sql="select * from customer";
        $x=mysqli_query($con,$sql);
        $num= mysqli_num_rows($x);
        ?>
        <h1 class="h1 text-center text-white mt-5">No. Of Customer</h1>
        <h1 class="display-1 text-center text-white mt-3"><?php echo $num ?></h1>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 bg-danger">
        <?php
        $sql="select * from painting";
        $x=mysqli_query($con,$sql);
        $num= mysqli_num_rows($x);
        ?>
        <h1 class="h1 text-center text-white mt-5">No. Of Painting</h1>
        <h1 class="display-1 text-center text-white mt-5"><?php echo $num ?></h1>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
    <img src="../image/image5.jpg" style="height: 400px;width: 200px%" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 bg-primary">
        <?php
        $sql="select * from payment";
        $x=mysqli_query($con,$sql);
        $num= mysqli_num_rows($x);
        ?>
        <h1 class="h1 text-center text-white mt-5">No. Of Payment</h1>
        <h1 class="display-1 text-center text-white mt-3"><?php echo $num ?></h1>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 bg-success">
        <?php
        $sql="select * from ordering";
        $x=mysqli_query($con,$sql);
        $num= mysqli_num_rows($x);
        ?>
        <h1 class="h1 text-center text-white mt-5">No.Of Order</h1>
        <h1 class="display-1 text-center text-white mt-3"><?php echo $num ?></h1>
    </div>
    </div>

    
    
</body>
</html>