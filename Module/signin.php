<?php
	session_start();
	include('connect.php');

	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	echo $username;
	echo $password;
	
	$sql = "SELECT * FROM msuser WHERE NIM = '$username'";
	$result  = mysqli_query($koneksi, $sql);
	$hasil = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result)>0){
		//$pw = pass_crypt($password); //encrypsi password
		if($password == $hasil['Password']){
			//echo "Password Cocok.";
			$_SESSION['login'] = 1;
			setcookie('fail', null, time()-300);
			header('Location: ../index.php');
		}else {
			//echo "Password salah";
			setcookie('pesan', "Invalid Username and Password", time()+300);
			setcookie('fail', 1, time()+300);
			header('Location: ../index.php');
		}
	}else {
		//echo "Username Tidak Ada.";
		setcookie('pesan', "Sorry you are not already registered, please contact the student services", time()+300);
		setcookie('fail', 1, time()+300);
		header('Location: ../index.php');
	}
	
	
	
?>