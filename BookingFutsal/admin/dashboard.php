<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0b1f3a, #1e3a8a);
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border-radius: 15px;
            border: none;
        }

        .sidebar {
            height: 100vh;
            background: #0b1f3a;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            padding: 10px;
            border-radius: 10px;
        }

        .sidebar a:hover {
            background: #1e3a8a;
        }

        .topbar {
            background: rgba(255,255,255,0.1);
            padding: 15px;
            border-radius: 10px;
        }

        .stat-card {
            background: white;
            color: black;
            text-align: center;
            padding: 20px;
        }

        .table {
            background: white;
            color: black;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="text-center">⚽ Admin</h4>
            <hr>
            <a href="#">Dashboard</a>
            <a href="#">Data Booking</a>
            <a href="#">Jadwal</a>
            <a href="#">Logout</a>
        </div>

        <!-- Content -->
        <div class="col-md-10 p-4">

            <!-- Topbar -->
            <div class="topbar mb-4">
                <h5>Selamat Datang, Admin 👋</h5>
            </div>

            <!-- Statistik -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card stat-card shadow">
                        <h6>Total Booking</h6>
                        <h3>25</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card shadow">
                        <h6>Booking Hari Ini</h6>
                        <h3>5</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card stat-card shadow">
                        <h6>Menunggu Konfirmasi</h6>
                        <h3>3</h3>
                    </div>
                </div>
            </div>

            <!-- Tabel Booking -->
            <div class="card p-3 shadow">
                <h5>Data Booking Terbaru</h5>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Durasi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andi</td>
                            <td>2026-04-10</td>
                            <td>10:00</td>
                            <td>2 Jam</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>2026-04-11</td>
                            <td>14:00</td>
                            <td>1 Jam</td>
                            <td><span class="badge bg-success">Disetujui</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>
