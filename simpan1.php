<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$NIK = $_POST  ['NIK'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];


$query = "INSERT INTO registrasi SET NIK='$NIK',Nama_Lengkap='$Nama_Lengkap',Email='$Email',Password='$Password'";
mysqli_query($koneksi, $query);
echo "<script>alert('Data yang anda Input sukses');window.location='login.php'</script>";



?>
