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
      <!-- <center><h1>MENU</h1></center> -->
    <br><br>
      <div class="container mt-4">
        <div class="container">
            <h2 class="menu-top-title">Top Sales</h2>
            <div class="box-menu-title"></div>
            <br>
            <div class="row mt-5">
                <div class="col-3">
                    <div style="z-index:1000;" align=center><img src="assets/img/coba-1.png" class="me-top-img" alt=""></div>
                    <div class="card card-menu mx-auto">
                        <div class="card-body" align=center>
                            <h5 class="card-title menu-card-title mt-5">CREAMY PRAWNS</h5>
                            <p class="card-text">$32</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div style="z-index:1000;" align=center><img src="assets/img/coba-2.png" class="me-top-img" alt=""></div>
                    <div class="card card-menu mx-auto">
                        <div class="card-body" align=center>
                            <h5 class="card-title mt-5">CAJUN SHRIMP</h5>
                            <p class="card-text">$43</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div style="z-index:1000;" align=center><img src="assets/img/coba-3.png" class="me-top-img" alt=""></div>
                    <div class="card card-menu mx-auto">
                        <div class="card-body" align=center>
                            <h5 class="card-title menu-card-title mt-5">RAMEN</h5>
                            <p class="card-text">$55</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div style="z-index:1000;" align=center><img src="assets/img/coba-4.png" class="me-top-img" alt=""></div>
                    <div class="card card-menu mx-auto">
                        <div class="card-body" align=center>
                            <h5 class="card-title mt-5">FISH HEAD CURRY</h5>
                            <p class="card-text">$23</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div><br><br><br><br><br>

      <div class="container mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-6">
                      <img src="assets/img/menu-1.jpg" class="me-med-img" alt="">
                  </div>
                  <div class="col-6">
                    <h5 class="mt-1 me-med-title menu-top-title">ASIA</h5>
                    <div class="box-menu-subtitle"></div>
                    <br>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Chili Crab</h5>
                                <p class="me-med-paragraf">Stir-fried crab in a tomato based, sweet, savoury and slightly hot chilli sauce.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Candied Haws</h5>
                                <p class="me-med-paragraf">Like mini candy apples with a sharp sour bite.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$25</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Fish Head Curry</h5>
                                <p class="me-med-paragraf">The head of a red snapper is stewed in a Kerala-style curry with assorted vegetables.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$17</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Ramen</h5>
                                <p class="me-med-paragraf">Japanese noodle soup.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$5</h5>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container mt-2-2">
          <div class="container">
              <div class="row">
                <div class="col-6">
                    <h5 class="me-med-title menu-top-title">EROPA</h5>
                    <div class="box-menu-subtitle-1"></div>
                    <br>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Beef Bourguignon</h5>
                                <p class="me-med-paragraf"> beef stew braised in red wine</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Creamy Garlic Prawns</h5>
                                <p class="me-med-paragraf">A creamy Vegetable Soup made with no cream, with noodles and prawns</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Cajun Shrimp</h5>
                                <p class="me-med-paragraf">a spicy blend featuring lots of paprika, cayenne, garlic powder, pepper and oregano.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Paella</h5>
                                <p class="me-med-paragraf">Spanish rice dish originally from Valencia.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="me-med-title menu-top-title">AMERICA</h5>
                    <div class="box-menu-subtitle-2"></div>
                    <br>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Jambalaya</h5>
                                <p class="me-med-paragraf">A Creole rice dish of West African, French, and Spanish influence</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$41</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Sirloin Steak</h5>
                                <p class="me-med-paragraf">Served with garlic butter and French fries</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$22</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Eggs Benedict</h5>
                                <p class="me-med-paragraf">Served with bacon, topped with a minute amount of sprouts.</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$41</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div>
                                <h5 class="me-med-subtitle">Challah</h5>
                                <p class="me-med-paragraf">A special bread in Jewish cuisine</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <h5>$41</h5>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>


      <br><br><br><br><br>
      <?php include "footer.php"; ?>
</body>
</html>