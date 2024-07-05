<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>

<?php include "navbar.php" ?>

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
                <img src="images/c1.jpeg" alt="Los Angeles" class="d-block" style="width:100%;height=90vh">
            </div>
            <div class="carousel-item">
                <img src="images/c2.jpg" alt="Chicago" class="d-block" style="width:100%;height=90vh">
            </div>
            <div class="carousel-item">
                <img src="images/c3.jpg" alt="New York" class="d-block" style="width:100%;height=90vh">
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

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-mg-6 col-12">
                    <img src="images/php.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-mg-6 col-12">
                    <h2 class="display-4">I'm Priyanka Aharwar</h2>
                    <p class="py-3">I'm PHP developer having experiance for creating dynamic websites.This is a simple example for landing page.A landing page is a webpage that is displayed when a potential customer clicks an advertisement or a search engine result link.
                        This webpage typically displays content that is a relevant extension of the advertisement or link.</p>
                    <a href="about.php" class="btn btn-success">Know more about me</a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/u1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">See some text here</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/u1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">See some text here</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/u1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">See some text here</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/images.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/images.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/images.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/images.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="images/c6.webp" alt="" class="img-fluid pb-4">
                </div>
                
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Connect Us</h2>
        </div>
        <div class="w-50 m-auto">
          <form action="user.php" method="post">
            <div class="form-group">
              <label >Username</label>
              <input type="text" name="username" outocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label >Email Id</label>
              <input type="text" name="email" outocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label >Mobile</label>
              <input type="text" name="mobile" outocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label >Comments</label>
              <textarea name="comments" value="comments" class="form-control">

              </textarea>
            </div>
            <div class="form-group py-3">
            <button name="submit" type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@Aharwarproduction</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>