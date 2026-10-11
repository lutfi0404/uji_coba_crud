<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form registrasi</title>
</head>
<body>
    <h2>registrasi akun</h2>
    <form action="proses_register.php" method="post">
<table>
<tr>
<td>nama lengkap</td>
<td><input type="text" name="nama" id="nama" placeholder="masukan nama"required></td>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" id="email" placeholder="masukan email"required></td>
</tr>
<tr>
<td>jurusan</td>
<td>
    <select name="jurusan" id="jurusan">
        <option value="rekayasa perangkat lunak">rekayasa perangkat lunak</option>
        <option value="akuntansi">akuntansi</option>
        <option value="teknik sepeda motor">teknik sepeda motor</option>
    </select>
</td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password" id="password" placeholder="buat password"required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="register"></td>
</tr>


    </table>
</form>
<p>sudah punya akun? <a href="login.php">login disini</a></p>
</body>
</html>