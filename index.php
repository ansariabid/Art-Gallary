<?php 
session_start();
include('../dbcon.php');
$email=$_SESSION['email'];
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="boot.css">
  <title>Customer Index</title>
 
</head>
<body>
<div class="container">
<div class="row mt-5">
	<div class="col-lg-12 col-md-12">
<h1>WELCOME CUSTOMER  (<?php echo $_SESSION['email']?>)</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<ul class="nav nav-tabs">
			<li class="nav-item active">
				<a href="Profile.php" class="nav-link">Profile</a>
			</li>
			<li class="nav-item">
				<a href="viewcart.php" class="nav-link">View Cart</a>
			</li>
			<li class="nav-item">
				<a href="index.php" class="nav-link">View paint</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">logout</a>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<?php

	$sql="select * from painting where status='unsold'";
	$x=mysqli_query($con,$sql);
	while($r=mysqli_fetch_assoc($x))
	{
	  ?>
		<div class="col-lg col-md-3">
			<div class="cart">
				<img src="../image/<?php echo $r['paint']?>"
				class="card-img-top" style="width:250px;height:300px;">
				<div class="card-body">
					<h1>&#8377;<?php echo $r['price']; ?></h1>
				</div>
				<div class="card-foot"></div>
<form action="addcart.php" method="post">
<input type="hidden" name="pname" value="<?php echo $r['pname']?>">
<input type="hidden" name="price" value="<?php echo $r['price']?>">
<button name="id" value="<?php echo $r['id']?>"  class="btn btn-outline-primary">Add Card</button>
				</form>
				</div>

		</div>

	<?php } ?>
</div>
</div>

<script  src="boot.js"></script>
<script  src="boot1.js"></script>
<script  src="boot2.js"></script>
</body>
</html>	