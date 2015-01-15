<html>
	<head>
		<title>KAKLBIS System</title>
		<link type="text/css" rel="stylesheet" href="../Css/css_header_menu.css" />
		<link type="text/css" rel="stylesheet" href="../Css/css_attendance.css" />
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
		<div style="background:white; width:100%; height:610px; margin: 55px 0 0 205px;  position:absolute;">
		
			<table border=0 width=60% style="z-index : 2;">
				<tr>
					Attendance
				</tr>
				<br><br><tr>
					<td width=40%>Course Name</td>
					<td width=20%>3</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>4</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>0</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>1</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>3</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>4</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>0</td>
				</tr>
				<tr>
					<td width=40%>Course Name</td>
					<td width=20%>1</td>
				</tr>
			</table>
			</div>
	</body>
</html>