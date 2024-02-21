<?php
include('../dbcon.php');

if(isset($_POST['email'])){
   
   $email=$_POST['email'];
   $op=$_POST['op'];
   $np=$_POST['np'];
   $cp=$_POST['cp'];
   $sql="select * from customer where email='$email'";
   $x=mysqli_query($con,$sql);
          if($r=mysqli_fetch_assoc($x))
          {
            $dbpswd=$r['pswd'];
            if ($dbpswd==$op){    
             if($np==$cp){
       $sql2="update customer set pswd='$np' where email='$email'";
       if(mysqli_query($con,$sql2)){
                 	header("location:index.php?msg=password change successfully");


                 } }
      

     else{
          	header("location:index.php?msg=new and confirm password does not match");

   }}

   else{
   	header("location:index.php?msg=old password does not match");

   }}

else{
	header("location:index.php?msg=invalid email");
}
}


?>