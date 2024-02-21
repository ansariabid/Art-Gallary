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

    <div class="col-lg-8 col-md-8 col-sm-12">
        <table class="table table-border">
            <tr>
                <th>oderid</th>
                <th>Paint Name</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Price</th>
            </tr>
            <?php
            $sql="select * from ordering";
            $x=mysqli_query($con,$sql);
            while($r=mysqli_fetch_assoc($x))
            {
                ?>
                <tr>
                    <td><?php echo $r['id']?></td>
                    <td><?php echo $r['pname']?></td>
                    <td><?php echo $r['name']?></td>
                    <td><?php echo $r['email']?></td>
                    <td><?php echo $r['price']?></td>
                    
                </tr>
                <?php
            } ?>

</table>



</body>    
</html>