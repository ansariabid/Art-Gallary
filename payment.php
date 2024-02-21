<?PHP 
session_start();
include('../dbcon.php');
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$total=$_SESSION['total'];
if(!empty($_SESSION['paint']))
{
	$query="select max(id) as mid from ordering";
	$x=mysqli_query($con,$query);
	if($r=mysqli_fetch_assoc($x))
	{
	$id=$r['mid']+1;
	$_SESSION['orderid']=$id;
	foreach($_SESSION['paint'] as $key){
	$pid=$key[0];
	$pname=$key[1];
	$price=$key[2];
	$date=date('d-m-Y');
	
	


	$sql="insert into ordering(id,pid,pname,price,name,email,date)values($id,'$pid','$pname','$price','$name','$email','$date')";
	mysqli_query($con,$sql);
	$sql2="update painting set status='sold' where id=$pid";
	mysqli_query($con,$sql2);
	}
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
			<h1 class="display-4 text-center">Payment</h1>
			<a href="bill.php" class="btn btn-outline-warning float-right mr-5">Back</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3"></div>
		<div class="col-lg-6 col-md-6">
			<form action="final.php" class="border p-5" method="post">
				<div class="form-group">
				<label>payment mode</label>
				<select class="form-control" name="paymode" id="mode">
				<option> online payment</option>
				<option> cash on dilivery</option>
				</select>
			   </div>
				<div id="online">
				<div class="form-check form-check-inline">
	<input type="radio" name="ctype" value="debit" class="form-check-input">
	<label class="form-check-check-label">Debit Card</label>
   </div>
     <div class="form-check form-check-inline">
	<input type="radio" name="ctype" value="debit" class="form-check-input">
	<label class="form-check-check-label">Credit Card</label>
</div>
<div class="form-group">
	<label> Name on Card</label>
	<input type="text" name="namecard" class="form-control">
</div>

<div class="form-group">
	<label> Card Number</label>
	<input type="text" name="cardno" class="form-control">
</div>

<div class="form-group">
	<label>CVV</label>
	<input type="password" name="cvv" class="form-control">
</div>
<div class="form-group">
<label>Expiry</label>
	<input type="month" name="exp" class="form-control">
</div>

<div class="form-group">
<label>Amount</label>
<input type="text" name="amount" class="form-control" value="<?php echo $total?>">
</div>

<div class="form-group" style="text-align: center;">
<button type="submit" name="pay" value="<?php echo $email?>" class="btn btn-outline-primary">Pay</button>
</div>
</div>
<div class="form-group">
	<button type="submit" name="place" value="<?php echo $email?>"class="btn btn-outline-success btn btn-block">Place order</button>
</div>
</form>


</div>
<script>
	$(document).ready(function(){
    $("#mode").change(function(){
    $("#online").slideToggle();
});
});


</script>


	</body>
	</html>