<?php
    session_start();
    $email = $_SESSION['email'];
    if(empty($_SESSION['email'])){
        header("location:login.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
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
<body>
    <?php
        include "koneksi.php"; 
        $id_review=$_GET['id_review'];
        $query=mysqli_query($konek, "SELECT * from review where id_review='$id_review'");
        $data =mysqli_fetch_array($query);
    ?>
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 align=center class="font-fair mt-2-2 mb-2">Edit Review</h2>
                    <form method="POST" action="updatereview.php">
                        <input type="hidden" name="id_review" value="<?php echo $data['id_review']; ?>"></br>
                        <textarea name="review" id="" cols="30" rows="5" class="form-control"><?php echo $data['review'] ?></textarea><br>
                        <div align=right><input type="submit" name="submit" id="" value="Send" class="btn btn-dark"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>