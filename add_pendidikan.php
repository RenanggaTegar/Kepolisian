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
      <form action="add_pendidikan.php" method="post" name="form1">
          <div class="mb-3">
              <label for="Id_pendidikan" class="form-label">ID Pendidikan</label>
            <input type="text" class="form-control" id="Id_pendidikan" name="Id_pendidikan">
          </div>
        
        <div class="mb-3">
          <label for="Tingkat_pendidikan" class="form-label">Tingkat Pendidikan</label>
          <select class="form-control" id="Tingkat_pendidikan" name="Tingkat_pendidikan">
            <option value="">-- Pilih --
            <option value="SD">SD
            <option value="SMP">SMP
            <option value="SMA">SMA
            <option value="AKPOL">AKPOL
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
        $Id_pendidikan = $_POST['Id_pendidikan'];
        $Tingkat_pendidikan = $_POST['Tingkat_pendidikan'];
        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pendidikan(Id_pendidikan, Tingkat_pendidikan) VALUES('$Id_pendidikan','$Tingkat_pendidikan')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php?page=data-pengguna'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="index.php?page=data-pengguna" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>