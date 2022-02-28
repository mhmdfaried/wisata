<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_wst";

$kon = mysqli_connect($host,$user,$password,$database);
if (!$kon){
	die("Koneksi gagal:".mysqli_connect_error());
}
?>