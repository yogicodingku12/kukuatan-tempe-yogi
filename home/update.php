<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_stok = $_POST['kd_stok'];
$nama_stok = $_POST['nama_stok'];
$jumlah_stok = $_POST['jumlah_stok'];
$satuan_stok = $_POST['harga barang'];
 
// update data ke database
mysqli_query($koneksi,"update gudang set nama_stok='$nama_stok', jumlah_stok='$jumlah_stok', harga barang='$harga barang' where kd_stok='$kd_stok'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>