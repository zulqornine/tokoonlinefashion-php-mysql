<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pengguna WHERE id_pengguna = '$id'";

if($connection->query($query)) {
    header("location: pengguna_tampil.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>