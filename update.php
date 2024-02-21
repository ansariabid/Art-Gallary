<html>
<head>
	    <link rel="stylesheet" type="text/css" href="../boot.css">
      <script type="" src="../boot.js"></script>
      <script type="" src="../boot1.js"></script>
      <script type="" src="../boot2.js"></script>
	<title>update painting details</title>
	<?php
	include("../dbcon.php");
	if(isset($_GET['id']))
	{
		echo $id=$_GET['id'];
		$sql="select * from painting where id='$id'";
		$x=mysqli_query($con,$sql);
		if($r=mysqli_fetch_assoc($x))
	
	{
       $pname=$r['pname'];
       $paintedby=$r['paintedby'];
       $price=$r['price'];
       $paint=$r['paint'];
  
       ?>

   </head>
   <body>
   	<h1>update from</h1>
   	<div class="container">
   		<div class="row">
   			<div class="col-md-3"></div>
      <div class="col-md-6">
<form action="update2.php" class="border p-3 text-center" method="post" enctype="multipart/form-data">
	<img src="../image/<?php echo $paint ?>" style="height:200px;width:200px;" class="img-thumbnail mb-2">
	<input type="file" name="paint" class="form-control">
	<button class="btn btn-outline-primary btn-sm mt-2" name="btn" value="<?php echo $id ?>">UPDATE PAINTING</button>
</form>


<form action="update2.php" method="post">
<div class="form-group">
<label for="name">name</label>
<input type="text" name="pname" value="<?php echo $pname?>" id="name" class="form-group"></div>



<div class="form-group">
<label for="paintedby">painted-by</label>
<input type="text" name ="paintedby" value="<?php echo $paintedby?>" id="paintedby" class="form-group"></div>

<div class="form-group">
<label for="price">price</label>
<input type="text" name ="price"value="<?php echo $price?>"id="form-group"></div>



<div class="form-group text-center mt-2">
<button type="submit" name="btn2" value="<?php echo $id ?>"  class="btn btn-outline-success">UPDATE</button>

</div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</body>
</html>
           
<?php
           }
       
       }
       ?>
