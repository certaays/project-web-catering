<?php
    include "koneksi.php";
    
    $id_review =$_GET['id_review'];
    $query=mysqli_query($konek,"DELETE FROM review where id_review='$id_review'");
    
    if($query){
        header("Location: review.php");
        // echo "Proses hapus berhasil, ingin lihat hasil <a href='output.php'> disini </a>";
    }
    else{
        echo "Proses Input gagal";
    }
?>