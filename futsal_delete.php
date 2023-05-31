<?php 
include "koneksi.php";
$id = $_GET["id"];

$delete = $koneksi->query("DELETE FROM futsal WHERE id='$id'");

if($delete) {
    header("Location:home.php?halaman=futsal-list&info=delete");
}

?>