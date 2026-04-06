<?php
session_start();
// contoh data dummy (nanti bisa dari database)
$riwayat = [
    ["nama"=>"Andi","tanggal"=>"2026-04-10","jam"=>"10:00","durasi"=>"2 Jam","status"=>"Pending"],
    ["nama"=>"Budi","tanggal"=>"2026-04-11","jam"=>"14:00","durasi"=>"1 Jam","status"=>"Disetujui"],
    ["nama"=>"Citra","tanggal"=>"2026-04-12","jam"=>"16:00","durasi"=>"3 Jam","status"=>"Ditolak"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Booking</title>
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

        .table {
            background: white;
            color: black;
            border-radius: 15px;
            overflow: hidden;
        }

        .badge-pending {
            background-color: orange;
        }

        .badge-success {
            background-color: green;
        }

        .badge-danger {
            background-color: red;
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
        <h2 class="title">📋 Riwayat Booking</h2>
        <p>Lihat semua riwayat pemesanan lapangan Anda</p>
    </div>

    <!-- Card Table -->
    <div class="card p-4 shadow">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Durasi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($riwayat as $data): ?>
                    <tr>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td><?= $data['jam']; ?></td>
                        <td><?= $data['durasi']; ?></td>
                        <td>
                            <?php if($data['status'] == 'Pending'): ?>
                                <span class="badge badge-pending">Pending</span>
                            <?php elseif($data['status'] == 'Disetujui'): ?>
                                <span class="badge badge-success">Disetujui</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Ditolak</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tombol kembali -->
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-outline-light">⬅ Kembali ke Menu</a>
    </div>

</div>

</body>
</html>
