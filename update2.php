<?php

include("../dbcon.php");
if(isset($_POST['btn']))
{
	$id=$_POST['btn'];

	$paint=$_FILES['paint']['name'];

	move_uploaded_file($_FILES['paint']['tmp_name'],$folder.basename($_FILES['paint']['name']));
	$sql="update painting set paint='$paint' where id='$id'";
	if(mysqli_query($con,$sql))
	{
      header("location:painting.php?msg=data update successfully");
	}
	else
	{
		echo"<script>alert('error');</script>";
	}
	}

	if(isset($_POST['btn2'])){
		$id=$_POST['btn2'];
		$pname=$_POST['pname'];
		$painted=$_POST['paintedby'];
		$price=$_POST['price'];
		$sql="update painting set pname='$pname',paintedby='$painted',price='$price' where id='$id'";
		if(mysqli_query($con,$sql)){
			header("location:painting.php?msg=data update successfully");
		}
		else
		{
			echo "error";
		}

	}
