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
<body>
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12">
	<h1>WELCOME CUSTOMER</h1><h2><?PHP echo $_SESSION['email']?></h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<ul class="nav nav-tabs">
			<li class="nav-item ">
				<a href="Profile.php" class="nav-link">Profile</a>
			</li>
			<li class="nav-item active">
				<a href="viewcart.php" class="nav-link active">View Cart</a>
			</li>
			<li class="nav-item">
				<a href="index.php" class="nav-link ">View paint</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link"> logout</a>
			</li>
		</ul>
	</div>
</div>
<div class="container mt-4">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
	<table class="table table-bordered">
      <tr><th>Paint Id</th><th> Paint Name</th><th>Price</th></tr>


	<?php
	if(empty($_SESSION['paint']))
	{
		echo "<div class='lead my-4'>card is empty please add painting in cart then visit this page again</div>";
	}
	else
	{
    $total=0;$grand=0;
	foreach($_SESSION['paint'] as $key)
   {  
   	   echo "<tr>";
   	   for($i=0; $i <count($key); $i++){
   	  	echo "<td>".$key[$i]."</td>";
   	  	$total=$key[2];
   	  }
   	    $grand+=$total;
   	    echo "</tr>";
}
  echo"<tr><td colspan='2'>Total Price</td><td>".$grand."</td></tr>";

 ?>
 <tr><td colspan="2">
 <a href="bill.php" class="btn btn-outline-primary btn-block">
   Checkout</a>
   </td>
   <td> <a href="index.php" class="btn btn-outline-dark">Back To Paint</a></td>
</tr>
   

   </table>

   </div>
  </div>
  </div>
  <?php }?>



<script  src="boot.js"></script>
<script  src="boot1.js"></script>
<script  src="boot2.js"></script>
</body>
</html>	