<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: calc(100% - 6px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h2>EDIT DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>

    <?php
    include 'koneksi.php';
    $kd_stok = mysqli_real_escape_string($koneksi, $_GET['kd_stok']);
    $query = "SELECT * FROM gudang WHERE kd_stok='$kd_stok'";
    $data = mysqli_query($koneksi, $query);

    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">

            <label for="kd_stok">Kode Stok</label>
            <input type="text" name="kd_stok" value="<?php echo htmlspecialchars($d['kd_stok']);?>">

            <label for="nama_stok">Nama Stok</label>
            <input type="text" name="nama_stok" value="<?php echo htmlspecialchars($d['nama_stok']); ?>">

            <label for="jumlah_stok">Jumlah Stok</label>
            <input type="text" name="jumlah_stok" value="<?php echo htmlspecialchars($d['jumlah_stok']); ?>">

            <label for="harga_barang">Harga Barang</label>
            <input type="text" name="harga barang" value="<?php echo htmlspecialchars($d['harga barang']); ?>">

            <input type="submit" value="SIMPAN">
        </form>
        <?php 
    }
    ?>

</body>
</html>
