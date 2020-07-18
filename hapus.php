<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM data_covid where positif=$id";
$hasil=mysqli_query ($koneksi,$query);

if($hasil){
	header("location: covid.php?pesan=hapus");
}else{
	echo "hapus data gagal";
}
?>