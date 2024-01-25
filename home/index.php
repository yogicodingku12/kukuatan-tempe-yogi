<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE PENJUALAN ARANG</title>
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

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid #3498db;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #ecf0f1;
        }

        tr:hover {
            background-color: #d4e6f1;
        }

        td a {
            display: inline-block;
            margin: 2px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
        }

        .edit {
            background-color: #2ecc71;
            color: #fff;
        }

        .delete {
            background-color: #FF4500;
            color: #000000;
        }.container{
	width: 80%;
	margin: 0 auto;
}

.container:after{
	content: " ";
	display: block;
	clear: both;
}


footer{
	padding: 20px 0;
    margin-top: 20px;
    font-size: 15px;
	background-color: #white;
	color: #000000;
	text-align: center;
}
/* CSS untuk tombol Tambah Barang */
a.button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #00c7bd; /* Warna latar belakang (Turquoise) */
    color: #fff; /* Warna teks (Putih) */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

a.button:hover {
    background-color: #00a49e; /* Warna latar belakang saat dihover (Dark Turquoise) */
    color: #fff; /* Warna teks saat dihover (Putih) */
}

    </style>
</head>
<body>

   
    <a href="tambah.php" class="button">Tambah Barang</a>


    <table>
        <tr>
            <th>No</th>
            <th>Kode Stok</th>
            <th>Nama Stok</th>
            <th>Jumlah Stok</th>
            <th>Harga Barang</th>
            <th>Opsi</th>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from gudang");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kd_stok']; ?></td>
                <td><?php echo $d['nama_stok']; ?></td>
                <td><?php echo $d['jumlah_stok']; ?></td>
                <td><?php echo $d['harga barang']; ?></td>
                
                <td>
                    <a class="edit" href="edit.php?kd_stok=<?php echo $d['kd_stok']; ?>">EDIT</a>
                    <a class="delete" href="hapus.php?kd_stok=<?php echo $d['kd_stok']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
    <footer>
            <div class="container">
                <small> Copyright &copy; 2024 - Yogi Abimanyu Permana, All Rights Reserved.</small>
            </div>
        </footer>
</body>
</html>
