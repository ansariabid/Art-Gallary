<?php
session_start();
include("../dbcon.php");

if (isset($_POST['btn']))
{
    $pname=$_POST['name'];
    $painted=$_POST['painted'];
    
    $price=$_POST['price'];
    $folder="../image/";
    move_uploaded_file($_FILES['paint']['tmp_name'],$folder.basename($_FILES['paint']['name']));
    $path=$_FILES['paint']['name'];

    $sql="insert into painting (pname,paintedby,paint,price)values('$pname','$painted','$path','$price')";
    if(mysqli_query($con,$sql))
    {
        echo "added successfully";
    }
    else
    {
        echo "not added";

    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" type="text/css" href="boot.css">
      <script type="" src="boot.js"></script>
      <script type="" src="boot1.js"></script>
      <script type="" src="boot2.js"></script>
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
            <tr><td colspan="6" class="text-right">
<button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#add">ADD PAINTING</button>
</td>
</tr>
               
                
               <tr>
                <th>Name</th>
                <th>painted By</th>
                <th>Price</th>
                <th colspan='1'>
                <th>Action</th>
            </tr>


          
            <?php
            $sql="select * from painting";
            $x=mysqli_query($con,$sql);
            while($r=mysqli_fetch_assoc($x))
            {
                ?>
                <tr>
                    <td><?php echo $r['pname']?></td>
                    <td><?php echo $r['paintedby']?></td>
                    <td><?php echo $r['price']?></td>

<td><a href="more.php?id=<?php echo $r['id']?>"class="btn btn-outline-primary">MORE</a></td>
 <td><a href="update.php?id=<?php echo $r['id']?>"class="btn btn-outline-primary">UPDATE</a></td>
 <td><a href="delete.php?id=<?php echo $r['id']?>"class="btn btn-outline-primary">DELETE</a></td>

</tr>
    <?php
 } 
 ?>

</table>
<div class="modal" id="add">
<div class="modal-dailog">
<div class="modal-content">
<div class="modal-header">
<div class="modal-title" style="text-align: center;">Add Painting</div>
<button class="btn btn-outline-danger btn-sm" data-dismiss="modal" class= "close">&times;</button>
</div>


<div class="modal-body" id="add">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="border m-6 p-5 m-auto" enctype="multipart/form-data">
  <div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control">
  </div>
  <div class="form-group">
 <label for="painted">Painted</label>
<input type="text" name="painted" id="painted" class="form-control">
  </div>
  <div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" id="price" class="form-control">
  </div>
        <div class="form-group">
          <label for="paint">paint</label>
          <input type="file" name="paint" id="paint" class="form-control">
        </div>

        
        <div class="form-group text-center">
          <button type="submit" class="btn btn-outline-success" name="btn">SUBMIT</button>
          <button type="reset" class="btn btn-outline-warning">CLEAR</button>
        </div>
      </form>
    

</div>
<div class="modal-footer">
    <button class="btn btn-light btn-sm" data-dismiss="modal" class="close">CLOSE</button>
</div>
</body>    
</html>