<?php
    session_start();

    include "koneksi.php";

    $review = $_POST['review'];
    
    $email = $_SESSION['email'];

    $query=mysqli_query($konek, "SELECT * FROM user WHERE email='$email'");
    while($data=mysqli_fetch_array($query)) {
        $id=$data['id_user'];
    }

    $query=mysqli_query($konek, "INSERT INTO review VALUES ('','$review','$id')")
    or die(mysqli_error($konek));

    if($query){
       header("Location: review.php");
       // echo "proses input berhasil, ingin lihat hasil <a href='index.php'>disini</a>";
    }
    else{
        echo "proses input gagal";
    }
?>