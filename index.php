<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script type="text/javascript" src="admin/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1,shrink-to-fit=no">


  <link rel="stylesheet" type="text/css" href="boot.css">
  <script src="boot.js"></script>
  <script src="boot1.js"></script>
  <script src="boot2.js"></script>


    <title></title>
  </head>
  <body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Art Gallary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">About</a>
      <a class="nav-item nav-link" href="#">Gallary</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      <a class="nav-item nav-link" href="registration.php">Registration</a>
      <a class="nav-item nav-link" href="admin/index.php">Admin Login</a>
      <a class="nav-item nav-link" href="login.php">Customer Login</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/123.jpg" class="d-block w-100" alt="..." style="height: 700px;width: 800px;">
    </div>
    <div class="carousel-item">
      <img src="image/photo3.jpg" class="d-block w-100" alt="..." style="height: 700px;width: 800px;">
    </div>
    <div class="carousel-item">
      <img src="image/photo2.jpg" class="d-block w-100" alt="..." style="height: 700px;width: 800px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   

   <div class="container-fluid mt-4">
    <section id="about" data-aos="zoom-in-up">
  <h1 class="text-center">About us</h1>
  <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>
</div>


   <section id="gallary">
    <div class="row">
      <div class=" col-md-12 col-lg-12">
        <h1 class="text-center">Art Gallary</h1>
      </div>
    </div> 
     <div style="display: flex;justify-content: space-around;flex-wrap: wrap;">
    <?php 

     include("dbcon.php");

    $sql="select * from painting where status='unsold'";
     $x=mysqli_query($con,$sql);
     while($r=mysqli_fetch_assoc($x))
     {
      ?>
       <div class="card">
        <a data-fancybox="gallery" href="image/<?php echo $r['paint']?>">
         <img src="image/<?php echo $r['paint']?>"  class="card-img-top"></a>
        <div class="card-title">
         <?php echo "Price:". $r['price']?> 

        </div>
        <div class="card-text">
         <?php echo "Paintedby:". $r['paintedby']?> 

        </div>
        <div class="card-foot">
          <form action="addcart.php" method="post">
            <input type="hidden" name="name" value="<?php echo $r['pname']?>">
            <input type="hidden" name="price" value="<?php echo $r['price']?>">
           <button class="btn btn-outline-primary" value="<?php echo $r["id"]?>" name="id">Add to Cart</button>
            </form>
          <form action="view.php">
          <button type="submit" class="btn btn-outline-info" value="<?php echo $r['id']?>" name="id">View More</button>
        </form>
        </div>
       </div>




      <?php

     }
    ?>   
    </div> 
   </section>
   <script type="text/javascript">
     $('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "zoom",
    "share",
    "slideShow",
    "fullScreen",
    "download",
    "thumbs",
    "close",
  ]
  
});
   </script>

   <script>
  AOS.init({
    duration:2000,
  });
</script>


  </body>
</html>