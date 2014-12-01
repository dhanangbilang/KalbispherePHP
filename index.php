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
							</table>
						</div>
					</form>
				</td>
			</tr>
		</table>
		<?php
			if(isset($_COOKIE['fail'])){
				?>
					<div id="outer_info_signin">
						<div id="info_signin">
							<?php echo $_COOKIE['pesan']; ?>
						</div>
					</div>
				<?php
			}
		?>
	</body>
</html>