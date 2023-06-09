<?php

    if(isset($_GET['NRP'])){
        $sql_cek = "SELECT * from anggota WHERE NRP ='".$_GET['NRP']."' " ;
        $query_cek = mysqli_query($koneksi, $sql_cek,);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
	
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NRP</b>
							</td>
							<td>:
								<?php echo $data_cek['NRP']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['Nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['Alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['Tempat_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['Tgl_lahir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Usia</b>
							</td>
							<td>:
								<?php echo $data_cek['Usia']; ?>
							</td>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['Jenis_kelamin']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

					<?php
						echo"<a href='view_keluarga.php?NRP=$data_cek[NRP]' class='btn btn-info btn-sm' style='font-weight: 600;'>Keluarga</a>
						<a href='view_jabatan.php?NRP=$data_cek[NRP]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Jabatan</a>
						<a href='view_pendidikan.php?NRP=$data_cek[NRP]' class='btn btn-secondary btn-sm' style='font-weight: 600;'>Pendidikan</a>"
					?>

					<!-- <a href="view_keluarga.php"
					 title="Cetak Data Pegawai" class="btn btn-primary">Keluarga</a> -->
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="dist/img/kindpng_2074624.png" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['NRP']; ?>
					-
					<?php echo $data_cek['Nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>