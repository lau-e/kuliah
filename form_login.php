<?php
include 'koneksi.php';

$Email       = $_POST['Email'];
$Password    = $_POST['Password'];

$query = "SELECT * FROM registrasi WHERE Email='$Email', Password= '$Password'";
mysqli_query($koneksi,$query);

echo "<script>alert('Anda Berhasil Login');window.location='frominput.php'</script>"; 
?>
