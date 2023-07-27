<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp       = $_POST['no_hp'];
$pesan       = $_POST['pesan'];

//query insert data ke dalam database
$query = "INSERT INTO kontak (nama, email, no_hp, pesan) VALUES ('$nama', '$email', '$no_hp', '$pesan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>