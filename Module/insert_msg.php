<?php require_once("connect.php"); ?>
<?php
	$isi_pesan = $_POST['isi_pesan'];
	$username = $_POST['id_nya'];
	//echo $username;
	
	$sql = "UPDATE private_msg SET message='$isi_pesan' WHERE ID=1 ";
	$result  = mysqli_query($koneksi, $sql);
	
	header("Location: ../Source/home.php?id=$username");
?>