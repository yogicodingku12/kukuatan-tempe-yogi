<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENJUALAN ARANG - Tambah Data</title>
    <style>
        body {
            background-color: #00bcd4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form-container h2 {
            color: #009688;
        }

        .form-container a {
            color: #009688;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #009688;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #009688;
            color: #fff;
        }

        input[type="number"],
        input[type="text"] {
            width: calc(100% - 6px);
            padding: 8px;
            margin: 6px 0;
            box-sizing: border-box;
            border: 1px solid #009688;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #009688;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00796b;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>TAMBAH DATA</h2>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <th>Kode Stok</th>
                    <td><input type="text" name="kd_stok" required></td>
                </tr>
                <tr>
                    <th>Nama Stok</th>
                    <td><input type="text" name="nama_stok" required></td>
                </tr>
                <tr>
                    <th>Jumlah Stok</th>
                    <td><input type="text" name="jumlah_stok" required></td>
                </tr>
                <tr>
                    <th>Harga Barang</th>
                    <td><input type="text" name="harga_barang" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <p><a href="index.php">KEMBALI</a></p>
    </div>

</body>

</html>
