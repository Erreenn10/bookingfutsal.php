<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Booking Lapangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0b1f3a, #1e3a8a);
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }

        .card {
            border-radius: 20px;
        }

        .form-control, .form-select {
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #1e3a8a;
            border: none;
            border-radius: 10px;
        }

        .btn-custom:hover {
            background-color: #3b5bdb;
        }

        .booking-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
        }

        .title {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h2 class="title">⚽ Booking Lapangan Futsal</h2>
        <p>Silakan isi form di bawah untuk melakukan pemesanan</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card booking-card p-4 shadow">

                <form method="POST" action="admin/proses_booking.php">

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" name="hp" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam Mulai</label>
                        <select name="jam" class="form-select">
                            <option>08:00</option>
                            <option>10:00</option>
                            <option>12:00</option>
                            <option>14:00</option>
                            <option>16:00</option>
                            <option>18:00</option>
                            <option>20:00</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Durasi</label>
                        <select name="durasi" class="form-select">
                            <option value="1">1 Jam</option>
                            <option value="2">2 Jam</option>
                            <option value="3">3 Jam</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-custom w-100 text-white">
                        Booking Sekarang
                    </button>

                </form>

            </div>

        </div>
    </div>

    <!-- Tombol kembali -->
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-outline-light">⬅ Kembali ke Menu</a>
    </div>

</div>

</body>
</html>
