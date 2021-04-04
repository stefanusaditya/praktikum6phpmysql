<!DOCTYPE html>
<html>
<head>
	<title>MANIPULASI DATA</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<h1>BASIS DATA PEGAWAI</h1>
	<p>Berikut daftar pegawai yang ada: </p>

	<!--Menampilkan data pada tabel-->
	<table border="2">
		<tr>
			<td>Kode Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Bidang Kerja</td>
		</tr>
	
	<?php
		//menampilkan data yang tersimpan
		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['KODE_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_BIDANG']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	mysqli_close($conn);
	?>
	</table>
	<br>
	<table>
		<tr>
			<!--Button-->
			<td><a href="insert.php"><input type="button" value="Tambah Data"></a></td>
			<td><a href="update.php"><input type="button" value="Ubah Data"></a></td>
			<td><a href="delete.php"><input type="button" value="Hapus Data"></a></td>
		</tr>
	</table>
</body>
</html>