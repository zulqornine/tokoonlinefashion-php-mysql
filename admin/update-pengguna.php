<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengguna = $_POST['id_pengguna'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengguna SET nama = '$nama', email = '$email', password = '$password' , level = '$level' WHERE id_pengguna = '$id_pengguna'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: pengguna_tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>