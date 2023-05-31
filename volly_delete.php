<?php 
include "koneksi.php";
$id = $_GET["id"];

$delete = $koneksi->query("DELETE FROM volly WHERE id='$id'");

if($delete) {
    header("Location:home.php?halaman=volly-list&info=delete");
}

?>