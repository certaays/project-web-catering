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
        body{
            background-color: #fdfaf9;
;
        }
    </style>
</head>
<body>
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
        <?php include "nav.php"; ?>
        <div align=center>
            <h2 class="mt-2-2 font-fair">Contact Us</h2>
            <p class="mt-3 mb-4 font-sans">Please use the form below to send us a message, or simply gives us a call</p>
        </div>
      <div class="row">
          <div class="col-7" align=right>
              <div class="card card-contact" align=center style="width: 85%;">
            <form method="POST" action="inputmessage.php">
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" name="nama_contact" id="" placeholder="Fullname" class="form-control form-contact-inp mt-4 ms-2-3 font-sans">
                        <input type="text" name="no_hp" id="" placeholder="Phone Number" class="form-control form-contact-inp mt-4 ms-2-3 font-sans">
                        <input type="date" name="event_date" id="event_date" placeholder="Event Date" class="form-control form-contact-inp mt-4 ms-2-3 font-sans">
                </div>
                    <div class="col">
                        <input type="email" name="email_contact" id="" placeholder="Email" class="form-control form-contact-inp mt-4 me-2-3 font-sans">
                        <select name="event_type" id="" class="form-select form-contact-inp mt-4 me-2-3 font-sans">
                            <option disabled="disabled" selected="selected">Event Type</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Others">Others</option>
                        </select>
                        <input type="time" name="event_time" id="event_time" placeholder="Event Time" class="form-control form-contact-inp mt-4  me-2-3 font-sans">
                    </div>
                </div>
                <textarea name="message" id="" cols="30" rows="10" class="form-control form-contact-me mt-4 font-sans"></textarea><br>
                <div align="right" class="pe-5 mt-2"><input type="submit" name="submit" id="" value="Submit" class="btn btn-dark font-sans"></div> <br><br>
             </form>
             </div>
         </div>
        <div class="col-5" align=left style="padding-left:50px;">   
             <div class="mt-3">
                <div class="box-contact-up-1">
                    <div class="pt-2 ps-5">
                        <h5 class="mt-2 font-fair">Phone</h5>
                        <p class="ps-2 font-sans font-contact-pa">0869695895</p>
                    </div>
                </div>
                <div class="box-contact-1"></div>
             </div>
             <div class="mt-4">
                <div class="box-contact-up-2">
                    <div class="pt-4 ps-4">
                        <h5 class="font-fair">Office Hours</h5>
                        <p class="font-sans font-contact-pa">Monday through Friday <br> 8am – 12:30pm & 1pm – <br> 5pm</p>
                    </div>
                </div>
                <div class="box-contact-2"></div>
             </div>
             <div class="mt-4">
                <div class="box-contact-up-3">
                    <div class="pt-4 ps-4">
                        <h5 class="font-fair">Address</h5>
                        <p class="font-sans font-contact-pa">2565 3rd Street, Suite 336 <br> San Francisco, CA 94107</p>
                    </div>
                </div>
                <div class="box-contact-3"></div>
             </div>
         </div>
    </div>
        
    <br><br><br><br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>