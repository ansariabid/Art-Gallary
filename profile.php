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
			<li class="nav-item active">
				<a href="Profile.php" class="nav-link active">Profile</a>
			</li>
			<li class="nav-item">
				<a href="viewcart.php" class="nav-link">View Cart</a>
			</li>
			<li class="nav-item">
				<a href="index.php" class="nav-link">View paint</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">View logout</a>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6">
		<?php 
          $sql="select * from customer where email='$email'";
          $x=mysqli_query($con,$sql);
          if($r=mysqli_fetch_assoc($x))
          {
          	?>
        
		<table class=" table table-borderless">
			<tr><th>Name</th><td><?php echo $r['name']?></td></tr>
			<tr><th>Email</th><td><?php echo $r['email']?></td></tr>
			<tr><th>Mobile</th><td><?php echo $r['mob']?></td></tr>
			<tr><th>Address</th><td><?php echo $r['address']?></td></tr>
		</table>
		 <?php }

		?>
	</div>
	<div class="col-lg-6 col-md-6">
		<fieldset class="border text-center mt-4" class="w-50"><legend>Change Password</legend>
			<form class="p-5" action="changepswd.php" method="post">
			<div class="form-group">
				<label>Old Password</label>
				<input type="password" name="op" class="form-control">
			</div>
			
			<div class="form-group">
				<label>New Password</label>
				<input type="password" name="np" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="cp" class="form-control">
			</div>
               <div class="form-group text-center">
               	<button class="btn btn-outline-primary btn-sm " name="email" value="<?php echo $r['email']?>">Change</button>
               </div>
		</form>
		</fieldset>

	</div>
</div>
</div>

<script  src="
boot.js"></script>
<script  src="boot1.js"></script>
<script  src="boot2.js"></script>
</body>
</html>	