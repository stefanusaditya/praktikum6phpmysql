<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
	<!--script php-->
	<?php
	//script insert data
	$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,EMAIL,ISI) VALUES('1','Stefanus Aditya','stefanusaf5@gmail.com','Sekeluarga')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil di insert";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	?>

	<!--tabel-->
	<table border="3">
		<tr>
			<td>ID_BT</td>
			<td>NAMA</td>
			<td>EMAIL</td>
			<td>ISI</td>
		</tr>

	<!--script php-->
	<?php
	//menampilkan data
	$sql="SELECT * FROM buku_tamu";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($tampil= mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$tampil['ID_BT']."</td>";
			echo "<td>".$tampil['NAMA']."</td>";
			echo "<td>".$tampil['EMAIL']."</td>";
			echo "<td>".$tampil['ISI']."</td>";
			echo "</tr>";
			echo"</table>";
		}
	}
	?>
	</table>
</body>
</html>