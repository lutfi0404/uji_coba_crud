<?php
session_start();
include "koneksi.php";

$email = $_POST['email'] ?? '';
$password = md5($_POST['password'] ?? '');

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email' LIMIT 1");
if (!$query) {
    die("query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "email tidak ditemukan!<a href='login.php'>kembali</a>";
    exit();
}

if ($data['password'] == $password) {
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['jurusan'] = $data['jurusan'];
    $_SESSION['status'] = "login";
    header("Location: dashboard.php");
    exit();
} else {
    echo "password salah!<a href='login.php'>kembali</a>";
}
