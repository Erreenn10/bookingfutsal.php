<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama    = $_POST['nama'];
    $hp      = $_POST['hp'];
    $tanggal = $_POST['tanggal'];
    $jam     = $_POST['jam'];
    $durasi  = $_POST['durasi'];

    // Redirect kembali ke index + kirim data via URL
    header("Location: ../index.php?status=success&nama=$nama&tanggal=$tanggal&jam=$jam&durasi=$durasi");
    exit();
}

// Cek bentrok jadwal
$cek = mysqli_query($conn,"SELECT * FROM booking 
WHERE tanggal='$tanggal' AND jam='$jam' AND status!='ditolak'");

if(mysqli_num_rows($cek) > 0){
        echo "FORM TERKIRIM";
} else {

    $status = "menunggu";

    mysqli_query($conn,"INSERT INTO booking (nama,hp,tanggal,jam,durasi,status)
    VALUES ('$nama','$hp','$tanggal','$jam','$durasi','$status')");

    header("Location: ../index.php?status=sukses");
    exit;
}
?>