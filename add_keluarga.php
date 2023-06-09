<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tambah Data Keluarga </h3>
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
      <form action="add_keluarga.php" method="post" name="form1">
          <div class="mb-3">
              <label for="Id_keluarga" class="form-label">ID Keluarga</label>
            <input type="int" class="form-control" id="Id_keluarga" name="Id_keluarga">
          </div>
        
        <div class="mb-3">
          <label for="NRP" class="form-label">NRP</label>
          <input type="int" class="form-control" id="NRP" name="NRP">
        </div>

        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="Nama"name="Nama">
        </div>

        <div class="mb-3">
          <label for="Status_Hubungan" class="form-label">Status Hubungan</label>
          <select class="form-control" id="Status_Hubungan" name="Status_Hubungan">
          <option value="BAPAK">BAPAK
              <option value="IBU">IBU
              <option value="ISTRI">ISTRI
              <option value="ANAK KE 1">ANAK KE 1
              <option value="ANAK KE 2">ANAK KE 2
              <option value="ANAK KE 3">ANAK KE 3
              <option value="ANAK KE 4">ANAK KE 4
              <option value="ANAK KE 5">ANAK KE 5
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
        $Id_keluarga = $_POST['Id_keluarga'];
        $NRP = $_POST['NRP'];
        $Nama = $_POST['Nama'];
        $Status_Hubungan = $_POST['Status_Hubungan'];
        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO keluarga(Id_keluarga, NRP, Nama, Status_Hubungan) VALUES('$Id_keluarga', '$NRP', '$Nama', '$Status_Hubungan')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php?page=data-pegawai'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="status_keluarga.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>