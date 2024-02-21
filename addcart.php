<?php
session_start();
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$pname=$_POST['pname'];
	$price=$_POST['price'];

	$paint=[$id,$pname,$price];
	if(empty($_SESSION['paint'])){
		$_SESSION['paint']=array();
	}
	array_push($_SESSION['paint'], $paint);
	header("location:index.php?msg=cart added successfully.Add more if you want");
}


?>