<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <title>Sign In</title>
</head>
<body>
    <br><br>
    <center><br><br><br><br>
    <div class="card" style="width:30rem;">
    <h2 class="mt-2 font-fair">Login</h2>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "login gagal! username dan password salah!";
            }
            // else if($_GET['pesan']=="logout"){
            //     echo "Anda telah berhasil logout";
            // }else if($_GET['pesan']=="belum_login"){
            //     echo "Anda harus login untuk mengakses halaman admin";
            // }
        }
    ?>
    <form action="ceklogin.php" method="POST">
        <input type="text" name="email" placeholder="E-mail" class="form-control mt-3 font-sans" style="width:20rem;">
        <input type="password" name="password" placeholder="Password" class="form-control mt-3 font-sans" style="width:20rem;">
        <button type="submit" name="submit" class="btn btn-dark mt-4 font-sans">Sign In</button><br>
    </form>
    <p class="mt-3 font-sans">New to catering ? <a href="registrasi.php">Join now</a></p>
    </div>
    </center>
</body>
</html>