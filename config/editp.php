<?php
require_once "database_connection.php";
$nama = $_POST["nama"];
$kota_lahir = $_POST["kota_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$pekerjaan = $_POST["pekerjaan"];
$alamat = $_POST["alamat"];


$q = $conn ->prepare("INSERT INTO `biodata` (`id`, `nama`, `kota_lahir`, `tanggal_lahir`, `pekerjaan`, `alamat`) VALUES (NULL, ?, ?, ?, ?, ?);");
$q->execute([$nama, $kota_lahir, $tanggal_lahir, $pekerjaan, $alamat]);
header("Location: ../index.php");
?>