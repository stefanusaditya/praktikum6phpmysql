<!--script php-->
<?php
	//koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//cek koneksi ke MySQL
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Terkoneksi ke MySQL..."."<br>";
	}

	//koneksi databse pegawai
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";
		//membuka koneksi ke database
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Terkoneksi ke Database ".$dbname."...";
		}
?>