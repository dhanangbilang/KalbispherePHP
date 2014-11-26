<?php
	include('connect.php');

	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	//echo $username;
	//echo $password;
	
	$sql = "SELECT * FROM user WHERE NIM = '$username' AND Password = '$password'";
	$result  = mysqli_query($koneksi, $sql);
	if($hasil = mysqli_fetch_assoc($result)){
	//$hasil = mysqli_fetch_assoc($result);
		echo $hasil['NIM'] . "<br>";
		echo $hasil['Password'] . "<br>";
		echo $hasil['Nama'] . "<br>";}
	else{
		header('Location: ../index.php');
	}
?>