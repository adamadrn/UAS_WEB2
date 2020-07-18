<?php
include "koneksi.php";

$wilayah = $_POST['wilayah'];
$positif= $_POST ['positif'];
$dirawat = $_POST ['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];

$query = mysqli_query($koneksi, "INSERT INTO data_covid (wilayah,positif,dirawat,sembuh,meninggal) VALUES 
	('$wilayah','$positif','$dirawat','$sembuh','$meninggal')");

header("Location: covid.php");
?>

