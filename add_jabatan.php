<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tambah Data Jabatan </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Database Kepolisian - Buat Data</title>
</head>

<body>
  <div class="container">
      <h3>Silahkan Masukkan Data</h3>
      <div class="mt-5">
      <!-- /declare name digunakan untuk memanggil fungsi post -->
      <form action="add_jabatan.php" method="post" name="form1">
          <div class="mb-3">
              <label for="Id_jabatan" class="form-label">ID Jabatan</label>
            <input type="text" class="form-control" id="Id_jabatan" name="Id_jabatan">
          </div>
        
        <div class="mb-3">
          <label for="Nama_jabatan" class="form-label">Nama Jabatan</label>
          <select class="form-control" id="Nama_jabatan" name="Nama_jabatan">
              <option value="">-- Pilih --
              <option value="Ipda">Ipda
              <option value="Iptu">Iptu
              <option value="AKP">AKP
              <option value="Kompol">Kompol
              <option value="AKBP">AKBP
              <option value="Kombes Pol">Kombes Pol
              <option value="Brigjen Pol">Brigjen Pol
              <option value="Irjen Pol">Irjen Pol
              <option value="Komjen Pol">Komjen Pol
              <option value="Jenderal">Jenderal
              </select>
            </td>
        </div>
        </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        
        
  </div>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $Id_jabatan = $_POST['Id_jabatan'];
        $Nama_jabatan = $_POST['Nama_jabatan'];
        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO jabatan(Id_jabatan, Nama_jabatan) VALUES('$Id_jabatan','$Nama_jabatan')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php?page=data-profil'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="index.php?page=data-profil" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>