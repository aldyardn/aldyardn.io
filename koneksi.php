<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kelompok2";

$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die ("koneksi gagal: ".$koneksi->connect_error);
}
?>