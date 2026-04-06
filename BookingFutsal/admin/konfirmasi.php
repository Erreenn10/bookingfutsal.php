<?php
$conn = mysqli_connect("localhost","root","","futsal");

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn,"UPDATE booking SET status='$status' WHERE id='$id'");

header("Location: dashboard.php");
?>