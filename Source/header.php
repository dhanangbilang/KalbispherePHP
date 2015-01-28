
<div id="outter_header">
	<table>
		<tr>
			<td>
				<img src="../Images/logo_header.png" style="margin-left:20px;"/>
			</td>
			<td>
				<div id="sign_out">
					<a href="../index.php">Sign Out</a>
				</div>
			</td>
			<td>
				<div id="profile">
					
					<img src="../Images/<?php $id_user = $_GET["id"]; echo $id_user;?>.jpg" style="width:33px; height:40px; border-radius : 10px;"/>
				</div>
			</td>
		</tr>
	</table>
	<div id="outer_profile" style="display:none;">
			<table>
				<tr>
					<td colspan="3">
						<div style="margin-left : 80px; margin-bottom : 20px;">
							<img src="../Images/<?php echo $id_user;?>.jpg" style="width:130px; height:150px; border-radius : 5px;"/>
						</div>
					</td>
				</tr>
				<?php
					$sql = "SELECT m.Nim, m.Nama, j.Nama_Jur, m.Tahun, m.Tempat_Lahir, m.Tgl_Lahir, m.Alamat, m.Kota, m.JK, m.Agama FROM mahasiswa m, jurusan j WHERE m.Kode_Jur = j.Kode_Jur and m.Nim = '2012100110'";
					$result  = mysqli_query($koneksi, $sql);
					$hasil = mysqli_fetch_assoc($result);
				?>
				<tr>
					<td>
						Student ID
					</td>
					<td>
						:
					</td>
					<td>
					<?php echo $hasil['Nim']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Student Name
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Nama']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Major
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Nama_Jur']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Generation
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Tahun']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Birth Place
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Tempat_Lahir']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Birth date
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Tgl_Lahir']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Address
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Alamat']; ?>
					</td>
				</tr>
				<tr>
					<td>
						City
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Kota']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Sex
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['JK']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Religion
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $hasil['Agama']; ?>
					</td>
				</tr>				
			</table>
	</div>
</div>