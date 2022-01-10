<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<?php include 'menu.php'; ?>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- About -->
<section class="my-5" >
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/6.jpg" class="img-fluid aboutimg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Hello World.</h2>
            <p class="py-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae iure magni temporibus nemo itaque? Culpa error ad quasi dolorum aut exercitationem quod vero sint magnam ipsum, adipisci atque facilis voluptatem.
            </p>
            <a href="about.php" class="btn btn-success"> Check More</a>
        </div>
    </div>
    </div>
</section>

<!-- Our Services -->
<section class="my-5" >
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Room Decoration</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dinning Table</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Lounge Decoration</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
        </div>
    </div>
    </section>

    <!-- Gallery -->
<section class="my-5" >
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/3.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/4.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/8.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/6.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/7.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/3.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/4.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" alt="" class="img-fluid pb-4">
            </div>
        </div>
    </div>
    </section>

        <!-- Contact Us -->
<section class="my-5" >
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group py-3">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group py-3">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group py-3">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group py-3">
                <label>Comments</label>
               <textarea class="form-control"name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success ">Submit</button>
        </form>
    </div>
    </section>

    <!-- footer -->
    <footer>
        <p class="p-3 bg-dark text-white text-center"> @awaiszafarofficial

        </p>
    </footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>