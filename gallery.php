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
    <style>
    </style>
</head>
<body>
      <?php include "nav.php"; ?>
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
              <li class="nav-item me-4">
                <a class="nav-link " aria-current="page" href="review.php">Review</a>
              </li>
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
            </ul>
            </div>
        </div>
      </nav>
      <center><h2 class="mt-2-2 font-fair mb-5">GALLERY</h2></center>

      <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="assets/img/gallery-1.jpg" class="gal-img-2" alt="">
                </div>
                <div class="col-6">
                    <img src="assets/img/gallery-2.jpg" class="gal-img-2" alt="">
                </div>
            </div>
        </div>
      </div>

      <div class="container mt-2-2">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="assets/img/gallery-3.jpg" class="gal-img-1" alt="">
                </div>
                <div class="col-4">
                    <img src="assets/img/gallery-4.jpg" class="gal-img-3" alt="">
                    <img src="assets/img/gallery-5.jpg" class="gal-img-3 mt-4" alt="">
                </div>
            </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="assets/img/gallery-6.jpg" class="gal-img-4-up" alt="">
                </div>
                <div class="col-3">
                    <img src="assets/img/gallery-7.jpg" class="gal-img-4-up" alt="">
                </div>
                <div class="col-6">
                    <img src="assets/img/gallery-8.jpg" class="gal-img-4" alt="">
                </div>
            </div>
        </div>
      </div>

      <div class="container mt-2">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="assets/img/gallery-9.jpg" class="gal-img-4" alt="">
                </div>
                <div class="col-3">
                    <img src="assets/img/gallery-10.jpg" class="gal-img-4-up" alt="">
                </div>
                <div class="col-3">
                    <img src="assets/img/gallery-11.jpg" class="gal-img-4-up" alt="">
                </div>
            </div>
        </div>
      </div>


      <div class="container mt-2">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="assets/img/gallery-12.jpg" class="gal-img-5" alt="">
                </div>
                <div class="col-8">
                    <img src="assets/img/gallery-13.jpg" class="gal-img-4" alt="">
                </div>
            </div>
        </div>
      </div>
      <br><br><br><br><br>


      <?php include "footer.php"; ?>
</body>
</html>