<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laporan</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href ="registrasi.css">
   <link rel="stylesheet" href="laporan1.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* table {
        border-collapse: collapse;
        width: 30%;
    }
    th,td {
        text-align: left;
        padding: 8px;
    }
    th:nth-child(even){background-color: #04AA6D;}

    th {
        background-color: #04AA6D;
        color: white;
    } */
</style>

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


            <h2>Laporan</h2>
        <nav>
        <button class="cn"><a href="halaman utama.php">(+)Home</a></button>
          <button class="cn"><a href="frominput.php">(+)Tambah Barang</a></button>
        </nav>
        <br>

        <table border='2' >
            <tr>
                <th>No</th>
                <th>Nama_Produk</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                
            </tr>
        <tbody>
                 
            <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($koneksi, $sql);
            while($Barang = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$Barang['Nomor']."</td>";
                echo "<td>".$Barang['Nama_Produk']."</td>";
                echo "<td>".$Barang['Jumlah']."</td>";
                echo "<td>".$Barang['Harga_Satuan']."</td>";
            
            
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        <button class="button" onClick="print_d()">Print Document</button>
        <script>
            function print_d(){
                window.open("print.php","_blank");
            }
        </script>

   
    </body>
</html>
