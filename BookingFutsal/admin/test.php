<?php
$conn = mysqli_connect("localhost","root","","futsal");

if($conn){
    echo "KONEKSI BERHASIL";
} else {
    echo "GAGAL";
}
?>