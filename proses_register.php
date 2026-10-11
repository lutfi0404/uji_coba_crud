<?php
include "koneksi.php";
$nama =$_POST['nama'];
$email =$_POST['email'];
$jurusan =$_POST['jurusan'];

$password= md5($_POST['password']);
$query="INSERT INTO users(id,nama,email,jurusan,password)
 VALUES (NULL, '$nama', '$email', '$jurusan', '$password')";
$proses=mysqli_query($koneksi,$query);
if($proses){echo"data berhasil di simpan";}
else{echo "data tidak tersimpan". mysqli_error($koneksi);
}
?>