<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

//query insert data ke dalam database
$query = "INSERT INTO produk (nama_produk, harga, jumlah) VALUES ('$nama_produk', '$harga', '$jumlah')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: produk_tampil.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
