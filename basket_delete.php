<?php 
include "koneksi.php";
$id = $_GET["id"];

$delete = $koneksi->query("DELETE FROM basket WHERE id='$id'");

if($delete) {
    header("Location:home.php?halaman=basket-list&info=delete");
}

?>