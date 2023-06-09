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
      <form action="add_statjab.php" method="post" name="form1">
          <div class="mb-3">
              <label for="NRP" class="form-label">NRP</label>
            <input type="int" class="form-control" id="NRP" name="NRP">
          </div>
        
        <div class="mb-3">
          <label for="Id_pendidikan" class="form-label">ID jabatan</label>
          <input type="int" class="form-control" id="Id_jabatab" name="Id_jabatan">
        </div>

        <div class="mb-3">
          <label for="Nama_sekolah" class="form-label">Terhitung mulai tanggal</label>
          <input type="date" class="form-control" id="Terhitung_mulai_tanggal" name="Terhitung_mulai_tanggal">
        </div>

        <div class="mb-3">
          <label for="Masa_jabatan" class="form-label">Masa jabatan</label>
          <input type="number" class="form-control" id="Masa_jabatan" name="Masa_jabatan">
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
        $Id_jabatan = $_POST['Id_jabatan'];
        $Terhitung_mulai_tanggal = $_POST['Terhitung_mulai_tanggal'];
        $Masa_jabatan = $_POST['Masa_jabatan'];
        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO status_jabatan(NRP, Id_jabatan, Terhitung_mulai_tanggal, Masa_jabatan) VALUES('$NRP', '$Id_jabatan', '$Terhitung_mulai_tanggal', '$Masa_jabatan')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='status_jabatan.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="status_jabatan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>