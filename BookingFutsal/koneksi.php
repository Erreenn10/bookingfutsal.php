<?php
$conn = mysqli_connect("localhost","root","","futsal");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>