<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Login</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">
   
</head>
<body>
   <nav class="menu-navigasi">
      <ul>
         <li><a class="namatoko menu" href="halaman utama.php ">Wedolma</a></li>
         <li><a class="menu" href="halaman utama.php">Beranda</a></li>
         <li><a class="menu" href="register.php">Registrasi</a></li>
         <li><a class="menu" href="Login.php">Login</a></li>
         <li><a class="menu" href="Produk.php">Input Data</a></li>
         <li><a class="menu" href="pemesanan.php">Laporan</a></li>
         <input type="search"><input type="submit" value="search" class="cari"></input>
      </ul>
   </nav>

	<div class="kotak_pemesanan">
		<p class="tulisan_pemesanan">Silahkan Pesan</p>

		<form action = '/pemesanan.html' method="post">
         <label>No</label>
			<input type="text" name="No" class="form_pemesanan" placeholder="masukkan No">

         <label>Nama Produk</label>
			<input type="text" name="nama_produk" class="form_pemesanan" placeholder="masukkan nama_produk">

			<label>Jumlah</label>
			<input type="number" name="Jumlah" class="form_pemesanan" placeholder="masukkan Jumlah">

			<label>harga</label>
			<input type="text" name="harga" class="form_pemesanan" placeholder="masukkan Pemesanan">
			<br/>
			<br/>
			<center>
				<a class="link" href="koneksi.php">PESAN</a>
			</center>
		</form>
		
	</div>
</body>
</html>