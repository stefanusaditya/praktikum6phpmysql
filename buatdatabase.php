<!--Skrip PHP-->
<?php
    //deklarasi variabel untuk nama server, username, pass
    $servername = "localhost";
    $username = "root";
    $password = "";

    //buka koneksi ke Mysql
    $conn = mysqli_connect($servername,$username,$password);
    if (!$conn) {
        die ("connection failed: ".mysqli_connect_error());
    }

    //buat database
    $sql = "CREATE DATABASE myDB";
    //cek berhasil / gagal buat database
    if (mysqli_query($conn, $sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database: ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>