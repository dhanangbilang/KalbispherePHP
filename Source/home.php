<?php require_once("../Module/connect.php"); ?>
<?php require_once("../Module/session.php"); ?>
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
	<body>
		<?php require_once("header.php"); ?>
		<?php require_once("menu.php"); ?>
		
		<?php
			$id_user = $_GET["id"];
			
			if($id_user==0000){
				?>
					<div id="outer_form_admin">
						<table>
							<tr>
								<td>
									<div id="form_input_msg">
										<form action="../Module/insert_msg.php" method="POST">
											<input type="text" name="id_nya" value="<?php echo htmlentities($id_user);?>" style="display:none;"/>
											<table>
												<tr>
													<td colspan="4">
														<h2>Insert Message</h2>
													</td>
												</tr>
												<tr>
													<td>
														<p>Pesan</p>
													</td>
													<td>
														<p>:</p>
													</td>
													<td>
														<p>
															<textarea name="isi_pesan" placeholder="Input message..." id="msg_fill" required></textarea>
														</p>
													</td>
													<td>
														<input style="width:97px;" type="submit" value="Send"/>
													</td>
												</tr>
												<tr>
													<td colspan="4">
														<div style="border-bottom : 1px solid #000;"></div>
													</td>
												</tr>
											</table>
										</form>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div style="border-right:1px solid #000; width:500px;">
										<form action="../Module/insert_mhs.php" method="POST">
											<input type="text" name="id_nya" value="<?php echo htmlentities($id_user);?>" style="display:none;"/>
											<table>
												<tr>
													<h2>Input Mahasiswa</h2>
												</tr>
												<tr>
													<td>NIM</td>
													<td>:</td>
													<td>
														<input type="text" name="Nim" value="" required/>
													</td>
												</tr>
												<tr>
													<td>NAMA</td>
													<td>:</td>
													<td>
														<input type="text" name="Nama" value="" required/>
													</td>
												</tr>
												<tr>
													<td>No_Telp</td>
													<td>:</td>
													<td>
														<input type="text" name="No_telp" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>:</td>
													<td>
														<input type="text" name="Alamat" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Kota</td>
													<td>:</td>
													<td>
														<input type="text" name="Kota" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Email</td>
													<td>:</td>
													<td>
														<input type="text" name="Email" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Tempat Lahir</td>
													<td>:</td>
													<td>
														<input type="text" name="Tempat_Lahir" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Tanggal Lahir</td>
													<td>:</td>
													<td>
														<input type="text" name="Tgl_Lahir" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Tahun</td>
													<td>:</td>
													<td>
														<input type="text" name="Tahun" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Jenis Kelamin</td>
													<td>:</td>
													<td>
														<input type="radio" name="JK" value="laki-laki">Laki-Laki
														<input type="radio" name="JK" value="perempuan">Perempuan
													</td>
												</tr>
												<tr>
													<td>Agama</td>
													<td>:</td>
													<td>
														<input type="radio" name="Agama" value="islam">Islam
														<input type="radio" name="Agama" value="kristen">Kristen
														<input type="radio" name="Agama" value="katolik">Katolik
														<input type="radio" name="Agama" value="buddha">Buddha
														<input type="radio" name="Agama" value="hindu">Hindu
													</td>
												</tr>
												<tr>
													<td>
													<input type="submit" value="Simpan">
													</td>
												</tr>
											</table>
										</form>
									</div>
								</td>
								<td>
									<div style="margin-left:-600px; margin-top:-100px;">
										<form action="../Module/insert_mhs.php" method="POST">
											<input type="text" name="id_nya" value="<?php echo htmlentities($id_user);?>" style="display:none;"/>
											<table>
												<tr>
													<h2>Input Dosen</h2>
												</tr>
												<tr>
													<td>Kode Dosen</td>
													<td>:</td>
													<td>
														<input type="text" name="Kode_Dosen" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Nama Dosen</td>
													<td>:</td>
													<td>
														<input type="text" name="Nama_Dosen" value=""required />
													</td>
												</tr>
												<tr>
													<td>No. Telepon</td>
													<td>:</td>
													<td>
														<input type="text" name="No_Telepon" value="" required/>
													</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>:</td>
													<td>
														<textarea name="Alamat" rows="5" cols="16" required></textarea>
													</td>
												</tr>
												<tr>
													<td><input type="submit" value="Submit"></td>
												</tr>
											</table>
										</form>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<?php  echo info();	?>
								</td>
							</tr>
						</table>
					</div>
					<div>
						<form action="../Module/insert_jadwal.php" method="POST">
						<input type="text" name="id_nya" value="<?php echo htmlentities($id_user);?>" style="display:none;"/>
							<h1><center>Jadwal Mata Kuliah</center></h1>
								<center><table><br><br>
								<tr>
									<td>
										Kelas
									</td>
									<td>
										:
									</td>
									<?php
											$sql = "SELECT Semester FROM matakuliah";
											$result  = mysqli_query($koneksi, $sql);
									?>
									<td>
										<select name="Semester">
											<?php
												while($hasil = mysqli_fetch_assoc($result)){
												?>
													<option value="<?php echo $hasil['Semester'];?>"><?php echo $hasil['Semester'];?></option>
												<?php
											}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Mata Kuliah
									</td>
									<td>
										:
									</td>
									<?php
											$sql = "SELECT Kode_Matkul, Nama_Matkul FROM matakuliah";
											$result  = mysqli_query($koneksi, $sql);
									?>
									<td>
										<select name="Nama_Matkul">
											<?php
												while($hasil = mysqli_fetch_assoc($result)){
												?>
													<option value="<?php echo $hasil['Kode_Matkul'];?>"><?php echo $hasil['Nama_Matkul'];?></option>
												<?php
											}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Jam
									</td>
									<td>
										:
									</td>
									<td>
										<select name="Waktu">
											<option value="08:00 - 11:50">08:00 - 11:50</option>
											<option value="10:00 - 11:50">10:00 - 11:50</option>
											<option value="14:00 - 15:20">14:00 - 15:20</option>
											<option value="16.20 - 18:20">16.20 - 18:20</option>
											<option value="09:00 - 10:50">09:00 - 10:50</option>
											<option value="10:00 - 11:50">10:00 - 11:50</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Hari
									</td>
									<td>
										:
									</td>
									<td>
										<select name="Hari">
											<option value="Senin">Senin</option>
											<option value="Selasa">Selasa</option>
											<option value="Rabu">Rabu</option>
											<option value="Kamis">Kamis</option>
											<option value="Jumat">Jumat</option>
											<option value="Sabtu">Sabtu</option>
											
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Dosen
									</td>
									<td>
										:
									</td>
									<td>
										<select name="Kode_Dosen">
										<?php
											$sql="SELECT Kode_Dosen, Nama_Dosen FROM dosen";
											$result = mysqli_query($koneksi, $sql);
											while($hasil = mysqli_fetch_assoc($result)){
												?>
													<option value="<?php echo $hasil['Kode_Dosen'];?>"><?php echo $hasil['Nama_Dosen'];?></option>
												<?php
											}
										?>
											
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Ruang
									</td>
									<td>
										:
									</td>
									<td>
										<select name="Kode_Ruang">
											<option value="AR404">AR404</option>
											<option value="AR304">AR304</option>
											<option value="AL502">AL502</option>
											<option value="AL505">AL505</option>
											<option value="AR412">AR412</option>
											<option value="AR410">AR410</option>
										</select> 
									</td>
								</tr>
								<tr>
									<td>
										Tipe Kelas
									</td>
									<td>
										:
									</td>
									<td>
										<!--<form>
										<br>
										<input type="radio" name="Jenis_Matkul" value="teori">Teori
										<input type="radio" name="Jenis_Matkul" value="praktikum">Praktikum
										</form>  -->
										<select name="Jenis_Matkul">
											<option value="1">Teori</option>
											<option value="2">Praktikum</option>
										</select> 
									</td>
								</tr>
								<tr>
									<td>
									<input type="submit" value="Submit">
									</td>
								</tr></center>
									
								</tr>
								</table>
						</form>
					</div>
					
					
					
					
					
				<?php
			}
			else{
				$sql = "SELECT * FROM private_msg";
				$result  = mysqli_query($koneksi, $sql);
				$hasil = mysqli_fetch_assoc($result);
				?>
				<div id="private_msg" style="width:auto; height:auto; min-height: 20px; background:white; top:50px; margin-left:200px; position:relative; border-bottom:1px solid #a2a2a2;">
					<div id="message_private" style="width:100%; font-size:20px; text-align:center;">
						<marquee behavior="scroll" direction="left" style="width:800px;">
							<?php
								echo $hasil['message'];
							?>
						</marquee>
					</div>
				</div>
				<?php
				}
			?>
			
	</body>
</html>