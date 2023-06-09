<?php
	include "../inc/koneksi.php";
	
	$NRP = $_GET['NRP'];

	$sql_cek = "SELECT * FROM anggota";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA ANGGOTA</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['Nama']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['Alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from anggota where NRP='$NRP'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA ANGGOTA</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>NRP</td>
				<td>:</td>
				<td>
					<?php echo $data['NRP']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="dist/img/logo polri-01.png" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['Nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['Alamat']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['Tempat_lahir']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['Tgl_lahir']; ?>
				</td>
			</tr>
			<tr>

			</tr>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>