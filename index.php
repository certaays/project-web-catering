<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <script src="assets/js/jquery-3.5.1.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>    
    </head>
    <style>
      .nav-home{
        background-color: transparent !important;
      }
    </style>
<body>
<?php 
      include "nav.php"; 
      ?>
      <div class="bg-home mb-5">
      <?php include "koneksi.php"; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white nav-home">
        <div class="container-fluid">
          <a class="navbar-brand nav-icon-self " href="index.php">CATERING</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-4">
                <a class="nav-link ms-7" aria-current="page" href="menu.php">Menu</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link " aria-current="page" href="about.php">About</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link " aria-current="page" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
              </li>
              <!-- <li class="nav-item me-4">
                <a class="nav-link " aria-current="page" href="review.php">Review</a>
              </li> -->
              </ul>
              <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <?php
                session_start();
                if(empty($_SESSION['email'])){
                    ?>
                  <li class="nav-item dropdown me-5">
                  <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="registrasi.php">Register</a></li>
                    <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                  </ul>
                </li>
              <?php
                } else{
                $email = $_SESSION['email'];
                ?>
              <li class="nav-item  me-5">
                <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Sign Out</a>
              </li>
              <?php } ?>
            </ul> -->
            </div>
        </div>
      </nav>
      <div class="container">
        <div class="container">
          <div class="row mb-5 mt-4">
            <div class="col-8" align=center>
              <img src="assets/img/home-cover.jpg" alt="" class="home-img-cover mt-3 mb-5">
            </div>
            <div class="col-4 mt-5" align=center style="padding-left:0px;">
              <h2 class="mt-2 home-cover-title">Want to make an event? <br> or need some food for your family?</h2>
              <p class="mt-2-3 home-cover-subtitle">Try to order our service cz delicious <br> try to order cs delicious</p>
              <button class="btn btn-dark mt-2-3" ><a href="#home" class="btn-link">Explore!</a></button>
            </div>
          </div>
        </div>
      </div>
      </div>

      <br><br><br><br><br><br><br><br>
      <div id="home">
        <div class="row row-cols-6 mt-5">
          <div class="col-md-7">
            <div style="padding-left:200px;"><img class="home-img-small" src="assets/img/home-about.jpg" alt=""></div>
            <div class="box-home" style="background-color: #ddb7ab;"></div></div>
          <div class="col-md-5 mt-5" style="padding-left: 20px; padding-right:130px;">
          <div align=right><h1 class='mt-2-2 font-fair home-cover-title'>About</h1>
            <p class="home-cover-subtitle mt-3">Catering is a proud Aboriginal company dedicated to feeding people, culture, connection and our rich heritage. Our delicious food is inspired by native and traditional produce, and we take pride in our own unique fusion of flavours because we believe ours is a story and a cuisine worth sharing.</p>
            <button class="btn btn-dark mt-1 font-sans"><a class="btn-link" href="about.php">More</a></button></div>
          </div>
        </div>
      </div>

      <br><br><br><br><br>
      <div class="container mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <div class="card  ms-auto" style="width: 15rem;" align=center>
              <img src="assets/img/home-menu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-fair">Menu</h5>
                <p class="card-text font-sans">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="menu.php" class="btn btn-dark font-sans">More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mx-auto" style="width: 15rem;" align=center>
              <img src="assets/img/home-gallery.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-fair">Gallery</h5>
                <p class="card-text font-sans">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="gallery.php" class="btn btn-dark font-sans">More</a>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-3">
            <div class="card  me-auto" style="width: 15rem;" align=center>
              <img src="assets/img/home-review.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-fair">Review</h5>
                <p class="card-text font-sans">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="review.php" class="btn btn-dark font-sans">More</a>
              </div>
            </div>
          </div> -->
          <div class="col-md-2"></div>
        </div>
      </div>
      </div>

      <br><br><br><br><br><br>
      <div class="row row-cols-6 mt-5">
      <div class="col-md-5 mt-3" style="padding-left:130px;">
          <h1  class="mt-5 home-cover-title">Contact Us</h1>
          <p class="mt-3 home-cover-subtitle">Catering is a proud Aboriginal company dedicated to feeding people, culture, connection and our rich heritage. Our delicious food is inspired by native and traditional produce, and we take pride in our own unique fusion of flavours because we believe ours is a story and a cuisine worth sharing.</p>
          <button class="btn btn-dark mt-1 font-sans"><a class="btn-link" href="contact.php">Book!</a></button>
        </div>
        <div class="col-md-7">
          <div style="padding-left:100px;"><img class="home-img-small-2" src="assets/img/home-contact.jpg" alt=""></div>
          <div class="box-home ms-auto" style="background-color: #999b84;"></div></div>
      </div>

      <br><br><br><br><br><br>
      <?php include "footer.php"; ?>
      <footer>
          <div class="pb-5" align=center style="background-color:whitesmoke;">
              <h6 class="pt-5 pb-2 font-fair"> &copyCopyright. All rights reserved</h6>
              <a href="https://instagram.com" style="color: black; padding-left:8px;"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="https://twitter.com" style="color: black; padding-left:8px;"><i class="fab fa-twitter fa-lg"></i></a>
              <a href="https://facebook.com" style="color: black; padding-left:8px;"><i class="fab fa-facebook-f fa-lg"></i></a>
          </div>
</footer>
</body>
</html>