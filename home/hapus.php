<?php
require_once "koneksi.php";
$kd_stok = $_GET['kd_stok'];
$delete = "DELETE FROM gudang WHERE kd_stok = '$kd_stok'";
if (mysqli_query($koneksi, $delete)) {
    echo "<script>alert('Data Sudah Dihapus');window.location.assign('index.php');</script>";
} else {
    echo "<script>alert('Gagal Menghapus Data');window.location.assign('index.php');</script>";
}
?>
