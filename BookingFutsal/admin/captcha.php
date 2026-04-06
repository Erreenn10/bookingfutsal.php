<?php
session_start();

// Generate teks acak
$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
$captcha = substr(str_shuffle($chars), 0, 5);

// Simpan ke session
$_SESSION['captcha'] = $captcha;

// Buat gambar
$width = 120;
$height = 40;
$image = imagecreate($width, $height);

// Warna
$bg = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

// Tambahkan noise (opsional)
for($i=0; $i<50; $i++){
    $noise_color = imagecolorallocate($image, rand(150,255), rand(150,255), rand(150,255));
    imagesetpixel($image, rand(0,$width), rand(0,$height), $noise_color);
}

// Tulis teks
imagestring($image, 5, 30, 10, $captcha, $text_color);

// Output image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>