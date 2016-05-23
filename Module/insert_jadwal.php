<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
	$Semester = $_POST['Semester'];
	//$Nama_Matkul = $_POST['Nama_Matkul'];
	//$kode_matkul = $_POST['Nama_Matkul'];
	$kode_matkul = $_POST['Nama_Matkul'];
	$username = $_POST['id_nya'];
	$Hari = $_POST['Hari'];
	$Waktu = $_POST['Waktu'];
	$Kode_Dosen = $_POST['Kode_Dosen'];
	$Kode_Ruang = $_POST['Kode_Ruang'];
	//$Jenis_Matkul = $_POST['Jenis_Matkul'];
	
	$sql1 = "Insert INTO jadwal (Kode_Matkul, Hari, Waktu, Kode_Dosen, Kode_Ruang) VALUES ('$kode_matkul'	, '$Hari', '$Waktu','$Kode_Dosen', '$Kode_Ruang')";
	//echo $sql1;
		$result1  = mysqli_query($koneksi, $sql1);
	
	$sql3 = "SELECT aNim FROM mahasiswa a, matakuliah b. WHERE a.Semester = b. Semester";
	$result3  = mysqli_query($koneksi, $sql3);
	while($hasil = mysqli_fetch_assoc($result3)){
		$sql2 = "INSERT INTO khs (Nim, Kode_Matkul, Semester, SKS) VALUES ($username, '$kode_matkul', '$Semester', '4')";
		$result2  = mysqli_query($koneksi, $sql2);
	}
	
	$sql2 = "INSERT INTO khs (Nim, Kode_Matkul, Semester, SKS) VALUES ($username, '$kode_matkul', '$Semester', '4')";
	$result2  = mysqli_query($koneksi, $sql2);
	
		header("Location: ../Source/home.php?id=$username");
	
	
	/* $sql = "SELECT Kode_Dosen FROM dosen WHERE Kode_Dosen = $Kode_Dosen";
	$result  = mysqli_query($koneksi, $sql);
	$hasil = mysqli_fetch_assoc($result);
	 */
	/* if(mysqli_num_rows($result)>0){
		$_SESSION["info"] = "Kode Dosen Telah ada";
		header("Location: ../Source/home.php?id=$username");
	}
	else{
		
	}
	 */
	
?>