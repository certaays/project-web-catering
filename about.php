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
      <br>

      <br><br>
      <div class="container mt-4">
          <div class="container">
              <div class="row">
                  <div class="col-6">
                        <img src="assets/img/about.jpg" class="ab-top-img-1" alt="" style="z-index: 2;">
                        <div class="box-about-1"></div>
                    </div>
                  <div class="col-6">
                        <h1 class="mt-2-2 font-fair">About Us <br> ㅡ </h1>
                        <p class="font-sans">Catering as a member of the Hotel and Restaurant Association of Baguio (HRAB), a multi-sectoral group and stakeholders of the Tourism Industry in the City of Baguio, is a catering service provider operating under Thikface Food Services. Our kitchen commissary is equipped with a high-quality kitchen facility, that is systematically and strategically organized to be able to provide top of the line catering services for up to 5,000 guests daily.</p>
                  </div>
              </div>
          </div>
      </div>

      <!-- <div class="container"> -->
          <br><br><br><br><br><br><br><br>
        <div class="row mt-5">
            <div class="col" style="background-color: #f4eeed;">
            <br><br><br><br><br>
            <center><h1 style="color: #4f4f4c; font-family: 'Playfair Display', serif;">Fresh, Healthy, Delicious</h1></center>
            <br><br><br><br><br>
            </div>
        </div>
      <!-- </div> -->


      <br><br><br><br><br>
      <div class="container mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-6">
                        <h1 class="mt-2-3 font-fair">Our Food <br> ㅡ </h1>
                        <p class="font-sans">Our passionate chefs create dishes full of international flavor, giving the Bay Area twist that makes them so unique. At Above & Beyond Catering, we pride ourselves on using fresh, sustainable ingredients in new and delectable ways. From Mexicali appetizers to Asian-inspired desserts, our chefs draw inspiration from every corner of the earth and fill your menu with flavor.</p>
                  </div>
                  <div class="col-6">
                        <img src="assets/img/about-2.jpg" class="ab-top-img-2" alt="" style="z-index: 2;">
                        <div class="box-about-2"></div>
                    </div>
              </div>
          </div>
      </div>

        <br><br><br><br><br>
      <?php include "footer.php"; ?>
</body>
</html>