	<?php

	include "koneksi.php";

	$id = $_GET['id'];
	$data = mysqli_query($koneksi,	"SELECT*FROM data_covid where positif='$id'");
	while($d = mysqli_fetch_array($data)){

		?>
		<center><h1>EDIT DATA PEMANTAUAN COVID19</h1></center>
		<form method="post" action="proseseditcovid.php">
			<table border="1" align="center">
				<tr>
				<td>Nama Wilayah</td>
				<td>
					<select name="wilayah" style="width: 100%; height: 40px;" value="<?php echo $d['wilayah']; ?>">
						<option disabled selected value>Nama Wilayah</option>
		                <option value="Aceh">Aceh</option>
		                <option value="Sumatra Utara">Sumatra Utara</option>
		                <option value="Sumatra Barat">Sumatra Barat</option>
		                <option value="Riau">Riau</option>
		                <option value="Kepulauan Riau">Kepulauan Riau</option>
		                <option value="Jambi">Jambi</option>
		                <option value="Bengkulu">Bengkulu</option>
		                <option value="Sumatra Selatan">Sumatra Selatan</option>
		                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
		                <option value="Lampung">Lampung</option>
		                <option value="Banten">Banten</option>
		                <option value="Jawa Barat">Jawa Barat</option>
		                <option value="Jawa Barat">Jawa Tengah</option>
		                <option value="Jakarta">Jakarta</option>
		                <option value="Semarang">Semarang</option>
		                <option value="Yogyakarta">Yogyakarta</option>
		                <option value="Jawa Timur">Jawa Timur</option>
		                <option value="Bali">Bali</option>
		                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
		                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
		                <option value="Kalimantan Barat">Kalimantan Barat</option>
		                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
		                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
		                <option value="Kalimantan Timur">Kalimantan Timur</option>
		                <option value="Kalimantan Utara">Kalimantan Utara</option>
		                <option value="Gorontalo">Gorontalo</option>
		                <option value="Sulawesi Barat">Sulawesi Barat</option>
		                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
		                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
		                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
		                <option value="Sulawesi Utara">Sulawesi Utara</option>
		                <option value="Maluku">Maluku</option>	
		                <option value="Maluku Utara">Maluku Utara</option>
		                <option value="Papua Barat">Papua Barat</option>
		                <option value="Papua">Papua</option>
		            </select>
		        </td>
				</tr>			
				<tr>
					<td>Positif</td>
					<td><input type="text" name="positif" value="<?php echo $d['positif']; ?>"></td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				</tr>
				<tr>
					<td>Dirawat</td>
					<td><input type="text" name="dirawat" value="<?php echo $d['dirawat']; ?>"></td>
				</tr>
				<tr>
					<td>Sembuh</td>
					<td><input type="text" name="sembuh" value="<?php echo $d['sembuh']; ?>"></td>
				</tr>
				<tr>
					<td>Meninggal</td>
					<td><input type="text" name="meninggal" value="<?php echo $d['meninggal']; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>