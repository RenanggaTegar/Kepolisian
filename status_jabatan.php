<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Status Jabatan</h3>
			<br>
      <a href="index.php?page=data-profil" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>
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
  <a href="add_statjab.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
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
          <th scope="col">NRP</th>
          <th scope="col">ID jabatan</th>
          <th scope="col">Terhitung mulai tanggal</th>
          <th scope="col">Masa jabatan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connection.php';
        $hasil = mysqli_query($koneksi, "SELECT * FROM status_jabatan")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['NRP'] . "</td>";
          echo "<td>" . $data['Id_jabatan'] . "</td>";
          echo "<td>" . $data['Terhitung_mulai_tanggal'] . "</td>";
          echo "<td>" . $data['Masa_jabatan'] . "</td>";
          echo "<td>
            <a href='edit_statjab.php?Id_jabatan=$data[Id_jabatan]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>
            <a href='delete_statjab.php?Id_jabatan=$data[Id_jabatan] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
          echo "</tr>";
          $no++;
        }
		
		
        ?>
      </tbody>
</table>