<?php 
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$id = $_POST['positif'];
$wilayah = $_POST['wilayah'];
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];

 
// update data ke database
mysqli_query($koneksi,"UPDATE data_covid set wilayah='$wilayah', dirawat='$dirawat', sembuh='$sembuh', meninggal='$meninggal' where positif='$id'");



// mengalihkan halaman kembali ke index.php
header("location: covid.php");
 
?> 
