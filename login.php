<!-- filename: login.php -->
<h3>Kalbiser Admin Login</h3>
<?php
if(isset($_COOKIE['fail'])){
	echo $_COOKIE['pesan'];
}
?>
<form action="login_proses.php" method="POST">

Username:
<input type="text" name="uname" />
<br />
Password:
<input type="password" name="pw" />
<br />
<input type="submit" name="login" value="Login" />

</form>