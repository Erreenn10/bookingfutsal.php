<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Futsal Booking</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>

<style>
body {
    background: #0b1f3a;
    font-family: 'Segoe UI', sans-serif;
    color: white;
}

.navbar { background: rgba(0,0,0,0.5); }

.hero {
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: linear-gradient(135deg, #0b1f3a, #1e3a8a);
}

.section { padding: 60px 0; }

.card {
    border-radius: 20px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

.btn-custom {
    background-color: #1e3a8a;
    border: none;
}

.btn-custom:hover { background-color: #3b5bdb; }

.footer {
    background: #08162a;
    padding: 20px;
    text-align: center;
}

.img-lapangan {
    border-radius: 20px;
    width: 100%;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand" href="#">⚽ Erren Stadium</a>
    <div class="ms-auto">
        <a href="login.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
</nav>

<!-- Hero -->
<div class="hero">
    <div class="animate__animated animate__fadeIn">
        <h1>Booking Lapangan Futsal Lebih Mudah</h1>
        <p>Pesan lapangan kapan saja dengan cepat dan praktis</p>
        <a href="booking.php" class="btn btn-custom text-white mt-3">Booking Sekarang</a>
    </div>
</div>

<!-- Gambar Lapangan -->
<div class="container section text-center">
    <h2 class="mb-4">Lapangan Kami</h2>

    <div class="position-relative">
        <img src="images/IMG_5694.JPG" class="img-lapangan">

        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h3>Erren Stadium</h3>
        </div>
    </div>
</div>

<!-- Fasilitas -->
<div class="container section">
    <h2 class="text-center mb-5">Fasilitas Kami</h2>
    <div class="row text-dark">
        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5>⚽ Lapangan Standar Nasional</h5>
                <p>Rumput sintetis berkualitas tinggi</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5>💡 Lampu Malam</h5>
                <p>Pencahayaan terang untuk bermain malam</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5>🚿 Ruang Ganti</h5>
                <p>Fasilitas nyaman dan bersih</p>
            </div>
        </div>
    </div>
</div>

<!-- Harga -->
<div class="container section text-center">
    <h2 class="mb-5">Harga Sewa</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 text-dark">
                <h4>Siang</h4>
                <h3>Rp 100.000 / jam</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-dark">
                <h4>Malam</h4>
                <h3>Rp 150.000 / jam</h3>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps -->
<div class="container-fluid section text-center px-5">
    <h2 class="mb-4">Lokasi Kami</h2>

    <div class="shadow" style="border-radius:20px; overflow:hidden;">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2848482841428!2d108.52655638885496!3d-6.7350624999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d56b30c9ac1%3A0xd91bd5c443ffbc1f!2sSyekh%20Nurjati%20Futsal%20Arena!5e0!3m2!1sen!2sid!4v1775380865680!5m2!1sen!2sid"
        width="100%" 
        height="400"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
        </iframe>
    </div>
</div>

<!-- Menu -->
<div class="container section">
    <h2 class="text-center mb-5">Menu Utama</h2>
    <div class="row text-dark">
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h5>📅 Booking</h5>
                <a href="booking.php" class="btn btn-custom text-white mt-3">Mulai</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h5>🗓️ Jadwal</h5>
                <a href="jadwal.php" class="btn btn-custom text-white mt-3">Lihat</a>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h5>📋 Riwayat</h5>
                <a href="riwayat.php" class="btn btn-custom text-white mt-3">Cek</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>© 2026 Booking Futsal | Dibuat dengan ❤️</p>
</div>

</body>
</html>
