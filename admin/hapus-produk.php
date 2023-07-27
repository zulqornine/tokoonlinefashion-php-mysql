<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id_produk = '$id'";

if($connection->query($query)) {
    header("location: produk_tampil.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>