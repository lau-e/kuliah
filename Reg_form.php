<?php
include "koneksi.php";

$NIK              = $_POST['NIK'];
$Nama_Lengkap     = $_POST['Nama_Lengkap'];
$Email            = $_POST['Email'];
$Password         = $_POST['Password'];

$query = "INSERT INTO registrasi SET NIK='$NIK',Nama_Lengkap='$Nama_Lengkap',Email='$Email',Passwod='$Password'";
mysqli_query($koneksi,$query);


echo "<script>alert('data yang anda input sukses');window.location="register.html"</script>";

?>