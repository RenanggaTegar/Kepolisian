<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tambah Data Anggota</h3>
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
      <form action="add_polisi.php" method="post" name="form1">
          <div class="mb-3">
              <label for="NRP" class="form-label">NRP</label>
            <input type="int" class="form-control" id="NRP" name="NRP">
          </div>
        
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="Nama" name="Nama">
        </div>

        <div class="mb-3">
          <label for="Tempat_lahir" class="form-label">Tempat lahir</label>
          <input type="text" class="form-control" id="Tempat_lahir"name="Tempat_lahir">
        </div>

        <div class="mb-3">
          <label for="Tgl_lahir" class="form-label">Tanggal lahir</label>
          <input type="date" class="form-control" id="Tgl_lahir" name="Tgl_lahir">
        </div>

        <div class="mb-3">
          <label for="Usia" class="form-label">Usia</label>
          <input type="number" class="form-control" id="Usia" name="Usia">
        </div>

        <div class="mb-3">
          <label for="Jenis_kelamin" class="form-label">Jenis kelamin</label>
          <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
          <option value="">-- Pilih --
          <option value="Laki-laki">Laki-Laki
          <option value="Perempuan">Perempuan
              </select>
            </td>
        </div>

        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="Alamat" name="Alamat">
        </div>

        <div class="mb-3">
          <label for="Username" class="form-label">Username</label>
          <input type="text" class="form-control" id="Username" name="Username">
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="text" class="form-control" id="Password" name="Password">
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
        $Nama = $_POST['Nama'];
        $Tempat_lahir = $_POST['Tempat_lahir'];
        $Tgl_lahir = $_POST['Tgl_lahir'];
        $Usia = $_POST['Usia']; 
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $Alamat = $_POST['Alamat'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];



        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO anggota(NRP, Nama, Tempat_lahir, Tgl_lahir, Usia, Jenis_kelamin, Alamat, Username, Password) VALUES('$NRP', '$Nama', '$Tempat_lahir', '$Tgl_lahir', '$Usia', '$Jenis_kelamin', '$Alamat', '$Username', '$Password')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php?page=data-pegawai'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="index.php?page=data-pegawai" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>