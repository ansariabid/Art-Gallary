<?PHP 
session_start();
include('../dbcon.php');
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$orderid=$_SESSION['orderid'];

if(isset($_POST['pay'])){
	$email=$_POST['pay'];
	$mode=$_POST['paymode'];
	$ctype=$_POST['ctype'];
	$namecard=$_POST['namecard'];
	$cardno=$_POST['cardno'];
	$cvv=$_POST['cvv'];
	$exp=$_POST['exp'];
	$amount=$_POST['amount'];

	$sql="insert into payment(mode,ctype,name,cno,cvv,exp,amount,status,orderid,customer) values('$mode','$ctype','$namecard','$cardno','$cvv','$exp','$amount','paid','$orderid','$name')";
	if(mysqli_query($con,$sql))
	{
		$sql2="update ordering set status='paid' where id='$orderid'";
		if(mysqli_query($con,$sql2))
		{
			echo "payment successfully";
		}
	}
	else
	{
		echo"error";
	}



}

if(isset($_POST['place'])){
	$email=$_POST['place'];
	$mode=$_POST['paymode'];
	$amount=$_POST['amount'];
	$sql="insert into payment(mode,amount,status,orderid,customer) values('$mode','$amount','unpaid','$orderid','$name')";

	if(mysqli_query($con,$sql))
	{
			echo "payment successfully";
		}
		
	}
	else
	{
		echo "error";
	}



 if(isset($_POST['btn']))
 {
 	$address=$_POST['address'];
 	$_SESSION['address']=$address;
 	$sql="update ordering set address='$address' where id=$orderid";
 	if(mysqli_query($con,$sql))
 	{
 		header("location:finalbill.php");
 	}
 }

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="boot.css">
  <title>Document</title>

 <link rel="stylesheet" type="text/css" href="../boot.css">
 <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="../boot1.js"></script>
<script type="text/javascript" src="../boot2.js"></script>
<script type="text/javascript" src="../boot.js"></script>


</head>
<body>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<h1 class="display-4 text-center">Place order</h1>
		<a href="payment.php".class="btn btn-outline-warning float-right mr-5">Back</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3"></div>
		<div class="col-lg-6 col-md-6">
			<form action="<?php echo $_SERVER['PHP_SELF']?>"
				class="p-5 border rounded" method="post">
				<div class="form-group">
					<label>Shipping Address</label>
					<textarea name="address" class="form-control"placeholder="Enter Full Address with pincode"></textarea>
				</div>
		<div class="form-group text-center">
		<button type="submit" name="btn" class="btn btn-outline-primary">SUBMIT</button>

	</div>
</form>
</div>
<div class="col-lg-6 col-md-6">
</body>
</html>