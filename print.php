<!DOCTYPE html>
<html>
<head>
    <title>Print Out</title>
    <link rel="stylesheet" href="print.css">
</head>
<body>
    <center>
        <h2>Laporan</h2>
        <h4>Data Barang</h4>
    </center>
    <?php
    include 'koneksi.php';
    ?>
    <table border="1" style="width: 100%" cellpadding="7" align="center">
        <tr>
            <th width="1">No</th>
            <th>Nama_Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    <?php
    $no = 1;
    $sql = mysqli_query($koneksi,"select * from barang");
    while($barang = mysqli_fetch_array($sql)){
        ?>

        <tr>
            <td><?php echo $no++;['Nomor'] ?></td>
            <td><?php echo $barang['Nama_Produk']; ?></td>
            <td><?php echo $barang['Jumlah']; ?></td>
            <td><?php echo $barang['Harga_Satuan']; ?></td>
        </tr>     
        <?php
    }
    ?>
</table>

    <script>
     window.print();
    </script>

</body>
</html>