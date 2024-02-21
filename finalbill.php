<?PHP 
session_start();
include('../dbcon.php');
$email=$_SESSION['email'];
$orderid=$_SESSION['orderid'];

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="boot.css">
  <title>Document</title>
 
</head>
<body  class="bg-dark">
	<?php
	$sql="select * from customer where email='$email'";
	$x=mysqli_query($con,$sql);
	if($r=mysqli_fetch_assoc($x))
	{
        ?>
  <div class="container mt-4 p-4"></div>
  <div class="row">
  	<div class="col-lg-2 col-md-2">
      <button onclick="window.print()" class="btn btn-outline-light">Print</button>
  </div>
  	
  	<div class="col-lg-6 col-lg-md-6"></div>
  	<div class="col-lg-2 col-lg-md-2">
<a href="index.php" class="btn btn-outline-primary">BACK </a>
</div>
  	<div class="col-lg-2 col-md-2">
  <a href="logout.php" class="btn btn-outline-warning">LOGOUT</a>
  	</div>
  	</div>

  <div class="row bg-light p-4 border border-danger rounded">
	<div class="col-lg-12 col-md-12 col-sm-12">

   <table class="table table-border">
		<tr>
			<td> Customer Name</td> <td><?php echo $r['name']?></td><td>Date: <?php echo date('d-m-y')?> </td>
		</tr>
		<tr>
	 <td> Customer Mobile No.</td> <td><?php echo $r['mob']?></td><td>Orderid Id: <?php echo $orderid ?> </td>
		</tr>

    <tr>
   <td> Shipping Address</td> <td><?php echo $_SESSION['address']?></td><td>thanksAgain! </td>
    </tr>
  
      
      <tr>
      	<th>Paint Id</th> <th> Paint Name</th><th>Price</th>
      </tr>
    
      <?php

      $sql="select * from ordering where id=$orderid";
      $x=mysqli_query($con,$sql);
      while($r=mysqli_fetch_assoc($x))
      {
        ?>
        <tr>
          <td><?php echo $r['pid'] ?></td>
          <td><?php echo $r['pname'] ?></td>
          <td><?php echo $r['price'] ?></td></tr>

<?php }} ?>

<tr>
  <td colspan="2">Total Amount</td> <td>&#8377;<?php echo $_SESSION['grand']?></td></tr>

  <tr>
     <td colspan="2">GST Calculated</td> <td> &#8377;<?php echo $_SESSION['gst']?></td></tr>

     <tr>
     <td colspan="2">Grand Total</td> <td> &#8377;<?php echo $_SESSION['total']?></td></tr>
  

      


	

   </table>
   </div>
  </div>
  </div>
</body>


<script  src="boot.js"></script>
<script  src="boot1.js"></script>
<script  src="boot2.js"></script>
</body>
</html>	