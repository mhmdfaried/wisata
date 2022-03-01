<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST;
$nl = $_POST['nl'];
$ni = $_POST['ni'];
$nh = $_POST['nh'];
$tw = $_POST['tw'];
$tk = $_POST['tk'];
$jp = $_POST['jp'];
$pa = $_POST['pa'];

// menginput data ke database
mysqli_query($kon, "INSERT INTO psn VALUES('','$nl','$ni','$nh','$tw','$tk','$jp','$pa')") or die(mysqli_error($kon));

echo "<script>alert('Data Berhasil Disimpan.');window.location='tmpln.php';</script>";
