<?PHP 
session_start();
include('../dbcon.php');
$email=$_SESSION['email'];

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
	{}
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
	<div class="col-lg-12 col-md-12 col-sm-12"></div>
	<table class="table table-border">
  
		<tr>
			<td> Customer Name</td> <td><?php echo $r['name']?></td><td>Date: <?php echo date('d-m-y')?> </td>
		</tr>
		<tr>
	 <td> Customer Mobile No.</td> <td><?php echo $r['mob']?></td><td>Bill Id: <?php echo rand(1,1000);?> </td>
		</tr>
    
      <tr>
      	<th>Paint Id</th> <th> Paint Name</th><th>Price</th>
      </tr>
      
      



	<?php
	$total=0;$grand=0;
	foreach($_SESSION['paint'] as $key)
   {  
   	   echo"<tr>";
   	   for($i=0; $i <count($key); $i++){
   	  	echo "<td>".$key[$i]."</td>";
   	  	$total=$key[2];
   	  }
         $grand+=$total;
   	      echo "</tr>";
        
}
 echo"<tr><td colspan='2'>Total Price</td><td>".$grand."</td></tr>";
 $_SESSION['grand']=$grand;
 $gst=($grand*18)/100;
 $sum=$grand+$gst;
 $_SESSION['gst']=$gst;
 $_SESSION['total']=$sum;
 echo"<tr><td colspan='2'>GST</td><td>".$gst."</td></tr>";
 echo"<tr><td colspan='2'> grand total price</td><td>".$sum."</td></tr>";

 ?>
 <tr><td colspan="2">
 <a href="payment.php" class="btn btn-outline-primary btn-block">
   Payment</a>
   </td>
   <td><a href="index.php" class="btn btn-outline-dark btn-block">
   Back To Home</a>
   </td>
   </td></tr>
   

   </table>
   </div>
  </div>
  </div>
</body>
<?php
?>


<script  src="boot.js"></script>
<script  src="boot1.js"></script>
<script  src="boot2.js"></script>
</body>
</html>	