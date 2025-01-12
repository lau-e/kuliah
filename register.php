<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="registrasi.css">
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
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form action = 'simpan1.php' method="post">
         <label for="NIK">NIK</label><br>
			<input type="text" name="NIK"  placeholder="masukkan NIK"> <required> <br>

         <label for ="Nama_Lengkap">Nama_Lengkap</label><br>
			<input type="text" name="Nama_Lengkap" placeholder="masukkan Nama_Lengkap"required>

			<label for= "Email">Email</label><br>
			<input type="text" name="Email"  placeholder="masukkan Email"required>

			<label for = "Password">Password</label><br>
			<input type="password" name="Password"  placeholder="masukkan Password"required>


			<button href="Login.php" class="tombol_regis">register</button>        

			<br/>
			<br/>
			
	
			
		</form>
		
	</div>
</body>
</html>