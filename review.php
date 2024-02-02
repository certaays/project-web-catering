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
        <center><h2 class="mt-2-2 mb-3 font-fair">Review</h2></center>
        <div>
          <?php
            if(!empty($_SESSION['email'])){
              $email = $_SESSION['email'];
                $query = mysqli_query($konek, "SELECT * FROM user where email='$email'");
                  while($data2=mysqli_fetch_array($query)){
                      $id=$data2['id_user'];
                  }
            }
                $query = mysqli_query($konek, "SELECT review.id_review, review.review, review.id_user, user.nama FROM review, user where review.id_user=user.id_user");
                  while($data=mysqli_fetch_array($query)){ ?>
                    <div class="container">
                    <div class="row">
                    <div class="col">
                    <div class="card card-review mt-4">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-11">
                            <h5 class="ms-1 card-title font-fair"><?php echo $data['nama']?></h5>
                            <div class="ms-3 mt-3 mb-2 font-sans"><?php echo $data['review'];?></div> 
                          </div>
                          <div class="col-1" align=right>
                             <?php if(!empty($_SESSION['email'])){ 
                                  if($id==$data['id_user']){ ?>             
                                <a href=editreview.php?id_review=<?php echo $data['id_review'];?> style="color:black; padding-right:8px;"><i class="fas fa-pen"></i></a>
                                <a href=hapusreview.php?id_review=<?php echo $data['id_review'];?> style="color:black;"><i class="fas fa-trash"></i></a>
                                <?php } ?>
                              <?php } ?>
                          </div>
                        </div>
                        
                       
                       </div>
                     </div></div></div></div>
                  <?php }  ?>
          </div>
        
        <div>
          <div class="container">
            <div class="row">
              <div class="col">
          <?php if(!empty($_SESSION['email'])){ ?>
              <form method="POST" action="inputreview.php">
                  <textarea name="review" id="" cols="20" rows="5" class="form-control mt-5"></textarea><br><br>
                  <div align=right><input type="submit" name="submit" id="" value="Send" class="btn btn-dark"></div>
              </form>
          <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <br><br><br><br><br><br>
        <?php include "footer.php"; ?>
</body>
</html>