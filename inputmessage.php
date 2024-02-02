<?php
    session_start();

    include "koneksi.php";

    $nama_contact = $_POST['nama_contact'];
    $email_contact = $_POST['email_contact'];
    $no_hp = $_POST['no_hp'];
    $event_type = $_POST['event_type'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $message = $_POST['message'];

    $query=mysqli_query($konek, "INSERT INTO contact VALUES ('','$nama_contact','$email_contact','$no_hp','$event_type','$event_date','$event_time','$message')")
    or die(mysqli_error($konek));

    if($query){
       header("Location: contact.php");
    }
    else{
        echo "proses input gagal";
    }
?>