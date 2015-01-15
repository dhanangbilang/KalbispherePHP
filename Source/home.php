<?php require_once("../Module/connect.php"); ?>
<html>
	<head>
		<title>KAKLBIS System</title>
		<link type="text/css" rel="stylesheet" href="../Css/css_header_menu.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="icon" type="image/ico" href="Images/favicon.ico">
		<script>
				$(document).ready(function(){
				  $("#profile").click(function(){
					$("#outer_profile").toggle();
				  });
				});
			</script>
	</head>
	<body style="background : #a2a2a2;">
		<?php require_once("header.php"); ?>
		<?php require_once("menu.php"); ?>
		
		<?php
			$id_user = $_GET["id"];
			
			if($id_user==0000){
				?>
					<div id="private_msg" style="width:auto; height:auto; min-height: 20px; background:white; top:50px; margin-left:200px; position:relative; border:1px solid #a2a2a2; border-radius:10px;">
						<form>
							<p>Pesan :</p>
							<p>
								<textarea id="msg_fill">
									
								</textarea>
							</p>
							<p>
								<input type="submit" value="Kirim"/>
							</p>
						</form>
					</div>
				<?php
			}
			else{
				$sql = "SELECT * FROM private_msg";
				$result  = mysqli_query($koneksi, $sql);
				$hasil = mysqli_fetch_assoc($result);
				?>
				<div id="private_msg" style="width:auto; height:auto; min-height: 20px; background:white; top:50px; margin-left:200px; position:relative; border:1px solid #a2a2a2; border-radius:10px;">
					<div id="message_private" style="width:100%; font-size:20px; text-align:center;">
						<?php
							echo $hasil['message'];
							//echo $id_user;
						?>
					</div>
				</div>
				<?php
				}
			?>
			
	</body>
</html>