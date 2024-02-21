 <?php 

 include("../dbcon.php");
     if(isset($_GET['id']))
      {
        $id=$_GET['id'];
       $sql="delete from painting where id='$id'";
       $query=mysqli_query($con,$sql);
   if($query>0)
   {
	   header('location:painting.php?msg=deleted successfully');
   }

   else
   {

	echo "not deleted";
    }
} 
  

  ?>