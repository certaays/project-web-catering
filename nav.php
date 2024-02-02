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