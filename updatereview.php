<?php
    include "koneksi.php";
    
    $id_review=$_POST['id_review'];
    $review =$_POST['review'];
    
    $query=mysqli_query($konek,"UPDATE review SET review='$review' where id_review='$id_review'")
    or die(mysqli_error($konek));
    
    if($query){
        header("Location: review.php");
    }
    else{
    echo "Proses Update gagal";
    }
?>
