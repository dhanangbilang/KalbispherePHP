<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php

	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	//echo $username;
	//echo $password;
	
	$sql = "SELECT * FROM msuser WHERE NIM = '$username'";
	$result  = mysqli_query($koneksi, $sql);
	$hasil = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result)>0){
		//$pw = pass_crypt($password); //encrypsi password
		if($password == $hasil['Password']){
			//echo "Password Cocok.";
			//$_SESSION["message"] = "Subject created.";
			//redirect_to("../Source/Home.php");
			header('Location: ../Source/Home.php');
		}else {
			//echo "Password salah";
			$_SESSION["message"] = "*Invalid username and password";
			//redirect_to("../index.php");
			header('Location: ../index.php');
		}
	}else {
		//echo "Username Tidak Ada.";
		$_SESSION["message"] = "*Sorry you are not already registered, please contact the student services";
		//redirect_to("../index.php");
		header('Location: ../index.php');
	}
	
	
	
?>