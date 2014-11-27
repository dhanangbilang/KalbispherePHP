<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$status = $_GET['status'];
	$status_login = "Invalid Username and Password";
?>

<html>
	<head>
		<title>KALBIS System</title>
		<link type="text/css" rel="stylesheet" href="Css/css_login.css" />
		<link rel="icon" type="image/ico" href="Images/favicon.ico">
	</head>
	<body>
		<table>
			<tr>
				<td>
					<div id="main_logo">
						<img src="Images/logo_login.png" />
					</div>
				</td>
				<td>
					<form action="Module/signin.php" method="POST">
						<div id="outter_form_login">
							<table>
								<tr>
									<td>
										<img  id="logo_sign" src="Images/sign.png" />
									</td>
								</tr>
								<tr>
									<td>
										<div class="inputan" >
											<input type="text" placeholder="Username" maxlength="10" name="username">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="inputan">
											<input type="password" placeholder="Password" name="password">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="inputan" id="tb_sign">
											<input type="submit" value="SIGN IN">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<?php
											if($status == 1){
												?>
													<p style="color:white;"><?php echo $status_login ?></p>
												<?php
											}
										?>
									</td>
								</tr>
							</table>
						</div>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>