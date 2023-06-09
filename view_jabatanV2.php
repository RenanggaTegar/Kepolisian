
<?php
  require 'connection.php';

  $NRP = $_GET['NRP'];
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Keluarga</h3>
			<br>
      <a href="index.php?page=data-pegawai" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>
	</div>
<!doctype html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Database Kepolisian</title>
  </head>

  <body>
      <div class="container mt-5>
      <h1>Hello, world!</h1>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  <a href="add_keluarga.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Database Kepolisian</title>
</head>

<table class="table table-dark table-hover">
    <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Keluarga</th>
          <th scope="col">NRP</th>
          <th scope="col">Nama</th>
          <th scope="col">Status Hubungan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connection.php';
        
        $hasil = mysqli_query($koneksi, "SELECT * FROM keluarga WHERE NRP = '$NRP';")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['Id_keluarga'] . "</td>";
          echo "<td>" . $data['NRP'] . "</td>";
          echo "<td>" . $data['Nama'] . "</td>";
          echo "<td>" . $data['Status_Hubungan'] . "</td>";
          echo "<td>
            <a href='edit_keluarga.php?Id_keluarga=$data[Id_keluarga]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
            <a href='delete_keluarga.php?Id_keluarga=$data[Id_keluarga] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
          echo "</tr>";
          $no++;
        }
		
		
        ?>
      </tbody>
</table>