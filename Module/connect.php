<?php // file name: koneksi.php
	// Step 1a. Buat Koneksi ke Database
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "kalbisphere";
	$koneksi = mysqli_connect($host, $user, $pass, $name);
	// Step 1b. Periksa Apakah Koneksi Berhasil
	if(mysqli_connect_errno()) {
		echo "Koneksi Gagal:";
		echo mysqli_connect_error();
		echo "(" . mysqli_connect_errno() . ")";
		die();
	} else {
		//echo "Koneksi Database Berhasil.";
	}
?>