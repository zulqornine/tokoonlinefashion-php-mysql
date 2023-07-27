<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', jumlah = '$jumlah' WHERE id_produk = '$id_produk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: produk_tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>