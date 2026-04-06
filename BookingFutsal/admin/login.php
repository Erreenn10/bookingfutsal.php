<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require __DIR__ . '/../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#0b1f3a;">

<div class="container mt-5">
    <div class="card p-4 col-md-4 mx-auto">
        <h4 class="text-center">Login Admin</h4>

        <form method="POST">
    <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
    
    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

    <!-- CAPTCHA -->
    <div class="mb-3">
        <img src="captcha.php" id="captcha-img" class="mb-2">

        <input type="text" name="captcha" class="form-control" placeholder="Masukkan captcha" required>

        <small>
            <a href="#" onclick="document.getElementById('captcha-img').src='captcha.php?'+Math.random(); return false;">
                Refresh Captcha
            </a>
        </small>
    </div>

    <button class="btn btn-primary w-100">Login</button>
</form>

        <?php
if(isset($_POST['username'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $captcha_input = $_POST['captcha'];

    // VALIDASI CAPTCHA
    if($captcha_input != $_SESSION['captcha']){
        echo "<div class='alert alert-danger mt-3'>Captcha salah!</div>";
    } else {

        $data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
        $cek = mysqli_num_rows($data);

        if($cek > 0){
            $_SESSION['login'] = true;
           header("Location: ../index.php");
            exit();
            
        } 
        else {
            echo "<div class='alert alert-danger mt-3'>Login gagal</div>";
        }
    }
}
?>