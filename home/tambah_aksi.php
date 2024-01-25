<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_stok = $_POST['kd_stok'];
$nama_stok = $_POST['nama_stok'];
$jumlah_stok = $_POST['jumlah_stok'];
$harga_barang = $_POST['harga_barang'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into gudang values('$kd_stok','$nama_stok','$jumlah_stok','$harga_barang')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>