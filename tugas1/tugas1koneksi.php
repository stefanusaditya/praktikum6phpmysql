<?php
	//membuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");
	//cek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Sudah terkoneksi Connect ke MySQL"."<br>";
	}
	//deklarasi variabel
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//membuka koneksi ke database myDB
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}else{
		echo "Sudah terConnect ke Database".$dbname."<br>";
	}
?>