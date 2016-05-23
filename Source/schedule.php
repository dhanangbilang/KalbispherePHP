<?php require_once("../Module/connect.php"); ?>
<html>
	<head>
		<title>KAKLBIS System</title>
		<link type="text/css" rel="stylesheet" href="../Css/css_header_menu.css" />
		<link type="text/css" rel="stylesheet" href="../Css/css_schedule.css" />
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
		<div id="outer_course">
			<table id= "tabelnya" class="table-isi" align="center" border="0" cellpadding="0" width="1000px; margin-left:200px;">
				<tbody>
					<tr bgcolor="white">
						<td class="isi-header" valign="top" width="1075px">
							<table border="0">
								<tbody>
									<tr>
										<td>
											<table border="0" width="100%">
												<tbody>
													<tr>
														<td class="isi-header" align="left">
															<span style="height: 20px;">Course Schedule</span>
													</td>
													</tr>
												</tbody>
											</table>
										</td>	
									</tr>
									<tr>	
										<td class="isi">
											&nbsp;
										</td>
									</tr>
									<tr>
										<td class="isi-header">
											<table class="isi" border="0">
												<tbody>
													<tr bgcolor="#DCDCDC">
														<td align="center" width="100px">
															<font color="black">
																<span style="height: 16px;">No.</span>
															</font>
														</td>
														<td align="center" width="575px">
															<font color="black">Course</font>
														</td>
														<td align="center" width="100px">
															<font color="black">Day</font>
														</td>
														<td align="center" width="100px">
															<font color="black">Time</font>
														</td>
														<td align="center" width="100px">
															<font color="black">Room</font>
														</td>
													</tr>
												</tbody>
											</table>
											<table border="0">
											<?php $username = $_GET["id"]; ?>
												<tbody>
													<?php
														$sql = "SELECT m.Semester, m.Kode_Matkul, m.Nama_Matkul, j.Hari, j.Waktu, j.Kode_Ruang, s.Nama FROM jadwal j, matakuliah m, khs k, mahasiswa s WHERE j.Kode_Matkul = k.Kode_Matkul and k.Nim = s.Nim and m.Kode_Matkul = j.Kode_Matkul and s.Nim=$username";
														$result  = mysqli_query($koneksi, $sql);
														//$hasil = mysqli_fetch_assoc($result);
														$count = 1;
														while($hasil = mysqli_fetch_assoc($result)){
															?>
															<tr>
																<td class="isi-table" align="center" width="100px"><?php echo htmlentities($count);?></td>
																<td class="isi-table" align="center" width="575px"><?php echo htmlentities($hasil['Kode_Matkul']) . " - " . htmlentities($hasil['Nama_Matkul']);?></td>
																<td class="isi-table" align="center" width="100px"><?php echo htmlentities($hasil['Hari']);?></td>
																<td class="isi-table" align="center" width="100px"><?php echo htmlentities($hasil['Waktu']);?></td>
																<td class="isi-table" align="center" width="100px"><?php echo htmlentities($hasil['Kode_Ruang']);?></td>
															</tr>
															<?php
															$count++;
														}
														
													?>
													
												</tbody>
											</table>
																									
																						
										</td>
									</tr>														
								</tbody>
							</table>
														
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>