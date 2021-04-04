<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<h3>Hapus Data Pegawai</h3><br>

	<!--Tabel menampilkan data-->
	<table border="2">
		<tr>
			<td>Kode Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Bidang Kerja</td>
		</tr>
	
	<?php
		//untuk menampilkan data
		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			//jika ada data
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['KODE_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_BIDANG']."</td>";
				echo "</tr>";
			}
		} else {
			//Jika kosong
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	?>

	</table><br>
	<form method="POST" action="delete.php">
		<table>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Hapus Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		//fungsi button submit delete
		if (isset($_POST['Submit'])) {
			$nama=$_POST['nama'];
			$sql="DELETE FROM pegawai WHERE nama_PEGAWAI = '$nama'";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Data Berhasil Dihapus!');history.go(-1);</script>";
			} else {
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>