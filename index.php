<?php require_once("Module/session.php"); ?>
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
											<input type="text" placeholder="Username" maxlength="10" name="username" required>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="inputan">
											<input type="password" placeholder="Password" name="password" required>
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
							</table>
						</div>
					</form>
				</td>
			</tr>
		</table>
		<?php  echo message();	?>
	</body>
</html>