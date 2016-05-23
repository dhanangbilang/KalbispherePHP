<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
	$username = $_POST['id_nya'];
	$Kode_Dosen = $_POST['Kode_Dosen'];
	$Nama_Dosen = $_POST['Nama_Dosen'];
	$No_Telepon = $_POST['No_Telepon'];
	$Alamat = $_POST['Alamat'];
	
	$sql = "SELECT Kode_Dosen FROM dosen WHERE Kode_Dosen = $Kode_Dosen";
	$result  = mysqli_query($koneksi, $sql);
	$hasil = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result)>0){
		$_SESSION["info"] = "Kode Dosen Telah ada";
		header("Location: ../Source/home.php?id=$username");
	}
	else{
		$sql1 = "Insert INTO dosen (Kode_Dosen, Nama_Dosen, No_Telepon, Alamat) VALUES('$Kode_Dosen', '$Nama_Dosen', '$No_Telepon', '$Alamat')";
		$result1  = mysqli_query($koneksi, $sql1);
	
		header("Location: ../Source/home.php?id=$username");
	}
	
	
?>