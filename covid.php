<!DOCTYPE html>
<html>
<head>
	<title>Data covid</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
			<center><h1 style="margin-top: 50px; margin-bottom: 20px;">DATA PEMANTAUAN COVID19 WILAYAH DKI JAKARTA
			<br>
			PER
			<?php
			date_default_timezone_set('Asia/Jakarta');
			echo date('d-m-Y H:i:s');
			?>
			<h3>Adam Adrian / 2016142209</h3>
			</h1></center>
	<table class="table1" align="center"> 
		<center><button onclick="window.location.href='tambahdata.php'" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">Add Data</button></center><br>
		<center><a href="cetak.php" target="_blank">cetak</a></center><br>
		<tr>
			<th>No</th>
			<th>Wilayah</th>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
			<th>Action</th>
		</tr>

<?php
include "koneksi.php";
$no=1;
$sql = mysqli_query ($koneksi, "SELECT*FROM data_covid");
while ($sql2= mysqli_fetch_array($sql)){
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $sql2 ['wilayah']; ?></td>
	<td><?php echo $sql2 ['positif']; ?></td> 
	<td><?php echo $sql2 ['dirawat']; ?></td>  
	<td><?php echo $sql2 ['sembuh']; ?></td> 
	<td><?php echo $sql2 ['meninggal']; ?></td> 

	<td align="center">
		<a href = "hapus.php?id=<?php echo $sql2 ['positif'];?>"
			onclick = "return confirm('Apakah anda yakin menghapus data ini ?')">deleted</a>
		<a href="edit.php?id=<?php echo $sql2 ['positif']; ?>">edit</a>
	</td>
</tr>
<?php
}
?>
	</table>	

</body>
</html>