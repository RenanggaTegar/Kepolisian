<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tambah Data Pendidikan </h3>
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
      <form action="add_statpen.php" method="post" name="form1">
          <div class="mb-3">
              <label for="NRP" class="form-label">NRP</label>
            <input type="int" class="form-control" id="NRP" name="NRP">
          </div>
        
        <div class="mb-3">
          <label for="Id_pendidikan" class="form-label">ID Pendidikan</label>
          <input type="int" class="form-control" id="Id_pendidikan" name="Id_pendidikan">
        </div>

        <div class="mb-3">
          <label for="Nama_sekolah" class="form-label">Nama Sekolah</label>
          <input type="text" class="form-control" id="Nama_sekolah"name="Nama_sekolah">
        </div>

        <div class="mb-3">
          <label for="Tahun_masuk" class="form-label">Tahun Masuk</label>
          <input type="date" class="form-control" id="Tahun_masuk" name="Tahun_masuk">
        </div>
        <div class="mb-3">
          <label for="Tahun_lulus" class="form-label">Tahun Lulus</label>
          <input type="date" class="form-control" id="Tahun_lulus" name="Tahun_lulus">
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
        $NRP = $_POST['NRP'];
        $Id_pendidikan = $_POST['Id_pendidikan'];
        $Nama_sekolah = $_POST['Nama_sekolah'];
        $Tahun_masuk = $_POST['Tahun_masuk'];
        $Tahun_lulus = $_POST['Tahun_lulus'];
        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO status_pendidikan(NRP, Id_pendidikan, Nama_sekolah, Tahun_masuk, Tahun_lulus) VALUES('$NRP', '$Id_pendidikan', '$Nama_sekolah', '$Tahun_masuk', '$Tahun_lulus')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='status_pendidikan.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="status_pendidikan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>