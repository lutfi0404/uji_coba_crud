<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>dashboard siswa</title>
</head>
<body>
    <h2>selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <p>kamu terdaftar di jurusan <b><?php echo $_SESSION['jurusan']; ?></b></p>
    
    <?php include 'menu.php'; ?>
    <a href="logout.php">logout</a>

</body>
</html>