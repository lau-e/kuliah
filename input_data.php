<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Nomor = $_POST  ['Nomor'];
$Nama_Produk = $_POST['Nama_Produk'];
$Jumlah = $_POST['Jumlah'];
$Harga_Satuan = $_POST['Harga_Satuan'];


$query = "INSERT INTO barang SET Nomor='$Nomor',Nama_Produk='$Nama_Produk',Jumlah='$Jumlah',Harga_Satuan='$Harga_Satuan'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Update sukses');window.location='laporan.php'</script>"; ?>

?>