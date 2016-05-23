<?php require_once("connect.php"); ?>
<?php
	$username = $_POST['id_nya'];
	$Nim = $_POST['Nim'];
	$Nama = $_POST['Nama'];
	$No_telp = $_POST['No_telp'];
	$Alamat = $_POST['Alamat'];
	$Kota = $_POST['Kota'];
	$Email = $_POST['Email'];
	$Tempat_Lahir = $_POST['Tempat_Lahir'];
	$Tgl_Lahir = $_POST['Tgl_Lahir'];
	$Tahun = $_POST['Tahun'];
	$JK = $_POST['JK'];
	$Agama = $_POST['Agama'];
	
	$sql2 = "SELECT NIM FROM msuser WHERE NIM = $Nim";
	$result2  = mysqli_query($koneksi, $sql2);
	$hasil2 = mysqli_fetch_assoc($result2);
	
	if(mysqli_num_rows($result2)>0){
		$_SESSION["info"] = "ID Mahasiswa Telah Ada";
		header("Location: ../Source/home.php?id=$username");
	}
	else{
		$sql = "Insert INTO mahasiswa (Nim, Nama, No_telp, Alamat, Kota, Email, Tempat_Lahir, Tgl_Lahir, Tahun, JK, Agama, Kode_Jur) VALUES($Nim, '$Nama', $No_telp, '$Alamat', '$Kota', '$Email', '$Tempat_Lahir', '$Tgl_Lahir', $Tahun, '$JK', '$Agama','TI0001')";
		$result  = mysqli_query($koneksi, $sql);
		
		$sql1 = "INSERT INTO msuser (NIM, Nama, Password) VALUES($Nim,'$Nama','$2LvWCyVaXrEI')";
		$result1  = mysqli_query($koneksi, $sql1);
	
		header("Location: ../Source/home.php?id=$username");
	}
	
	
?>