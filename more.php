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
    <a href="painting" class="nav-link">painting</a>
    </div>

    <div class="nav-item">
    <a href="order" class="nav-link">order</a>
    </div>

    <div class="nav-item">
    <a href="transaction" class="nav-link">transaction</a>
    </div>
</div></div>

    <div class="col-lg-8 col-md-8 col-sm-12">
        <?php if (isset($_GET['id']))
        $id=$_GET['id'];
        $sql="select * from painting";
        $x=mysqli_query($con,$sql);
        if($r=mysqli_fetch_assoc($x))
        {
            ?>
            <table class="table table-borderless">
                <tr> <td colspan="2" class="text-center">

 <img src="<?php echo '../image/'.$r['paint'] ?>" height="height:200px;width:300px;">
</td>
</tr>
                    
    <tr><th>S.No</th><td><?php echo $r['id']?></td></tr>
    <tr><th>Painting Name</th><td><?php echo $r['pname']?></td></tr>
    <tr><th>Painted By</th><td><?php echo $r['paintedby']?></td></tr>
    <tr><th>Price</th><td><?php echo $r['price']?></td>
    </tr>
    </table>

    <?php
        } 
          ?>  

</body>
</html>