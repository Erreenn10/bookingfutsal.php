<?php
session_start();

// Data dummy jadwal (bisa diganti dari database nanti)
$jadwal = [
    ["tanggal"=>"2026-04-10","jam"=>"08:00","status"=>"Kosong"],
    ["tanggal"=>"2026-04-10","jam"=>"10:00","status"=>"Terisi"],
    ["tanggal"=>"2026-04-10","jam"=>"12:00","status"=>"Kosong"],
    ["tanggal"=>"2026-04-10","jam"=>"14:00","status"=>"Terisi"],
    ["tanggal"=>"2026-04-10","jam"=>"16:00","status"=>"Kosong"],
    ["tanggal"=>"2026-04-10","jam"=>"18:00","status"=>"Kosong"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Lapangan</title>
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

        .badge-kosong {
            background-color: green;
        }

        .badge-terisi {
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
        <h2 class="title">🗓️ Jadwal Lapangan Futsal</h2>
        <p>Cek ketersediaan lapangan sebelum melakukan booking</p>
    </div>

    <!-- Card Table -->
    <div class="card p-4 shadow">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($jadwal as $data): ?>
                    <tr>
                        <td><?= $data['tanggal']; ?></td>
                        <td><?= $data['jam']; ?></td>
                        <td>
                            <?php if($data['status'] == 'Kosong'): ?>
                                <span class="badge badge-kosong">Kosong</span>
                            <?php else: ?>
                                <span class="badge badge-terisi">Terisi</span>
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
