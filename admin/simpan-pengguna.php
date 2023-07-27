<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

//query insert data ke dalam database
$query = "INSERT INTO pengguna (nama , email, password, level) VALUES ('$nama',  '$email', '$password', '$level')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
    
    //redirect ke halaman index.php 
    header("location: pengguna_tampil.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
