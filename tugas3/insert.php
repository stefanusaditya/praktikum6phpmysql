<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<p>Masukkan Data Pegawai</p>
	<table border="2">
		<tr>
			<td>Kode Pegawaiaa</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Bidang Kerja</td>
		</tr>
	
	<?php
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
	?>

	</table><br>
	<form method="POST" action="insert.php">
		<table>
			<tr>
				<td>Kode Pegawai : </td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat Pegawai : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Bidang Kerja : </td>
				<td><input type="text" name="bidang"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Masukkan Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['Submit'])) {
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$bidang=$_POST['bidang'];
			$sql="INSERT INTO pegawai (KODE_PEGAWAI,KODE_BIDANG,NAMA_PEGAWAI,ALAMAT_PEGAWAI) VALUES ('$kode','$bidang','$nama','$alamat')";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Data Berhasil Masuk!');history.go(-1);</script>";
			} else {
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>