<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href ="registrasi.css">
</head>
<body>

   <nav class="menu-navigasi">
      <ul>
      <li><a class="namatoko menu" href="halaman utama.php ">Wedolma</a></li>
         <li><a class="menu" href="halaman utama.php">Beranda</a></li>
         <li><a class="menu" href="register.php">Registrasi</a></li>
         <li><a class="menu" href="login.php">Login</a></li>
         <li><a class="menu" href="frominput.php">Input Data</a></li>
         <li><a class="menu" href="laporan.php">Laporan</a></li>
         <input type="search"><input type="submit" value="search" class="cari"></input>
      </ul>
   </nav>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>

		<form action = 'form_login.php' method="post">
         
			<label for = "Email">Email</label><br>
			<input type="text" name="Email"  placeholder="masukkan email"required>

			<label for = "Password">Password</label><br>
			<input type="password" name="Password"  placeholder="masukkan password"required>

	
         <button class="tombol_regis"><a href="frominput.php" >Login<a></button>    
         
         

			<br/>
			<br/>

		</form>
		
	</div>
</body>
</html>