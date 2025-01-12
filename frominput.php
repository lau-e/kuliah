<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Input Data</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href ="registrasi.css">
</head>
<body>

   <nav class="menu-navigasi">
      <ul>
      <li><a class="namatoko menu" href="halaman utama.php">Wedolma</a></li>
            <li><a class="menu" href="halaman utama.php">Beranda</a></li>
            <li><a class="menu" href="register.php">Registrasi</a></li>
            <li><a class="menu" href="Login.php">Login</a></li>
            <li><a class="menu" href="frominput.php">Input Data</a></li> 
            <li><a class="menu" href="laporan.php">Laporan</a></li>
         <input type="search"><input type="submit" value="search" class="cari"></input>
      </ul>
   </nav>
    
   <div class="kotak_login">
		<p class="tulisan_login">Input Data</p>

		<form action = 'input_data.php' method="post">
         <label for="Nomor">No</label><br>
			<input type="text" name="Nomor"  placeholder="masukkan No"> <required> <br>

         <label for ="Nama_Produk">Nama Produk</label><br>
			<input type="text" name="Nama_Produk" placeholder="masukkan Nama Produk"required>

			<label for= "Jumlah">Jumlah</label><br>
			<input type="text" name="Jumlah"  placeholder="masukkan Jumlah"required>

			<label for = "Harga_Satuan">Harga Satuan</label><br>
			<input type="text" name="Harga_Satuan"  placeholder="masukkan Harga Satuan"required>

			<br/>
			<br/>
			
	
			
		</form>
      
		<button href="+" class="tombol_regis">Simpan Data</button> 
      
	</div>
    


</body>
</html>