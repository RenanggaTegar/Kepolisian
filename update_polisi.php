<?php
// include database connection file
require 'connection.php';
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $NRP = $_POST['NRP'];
  $Nama = $_POST['Nama'];
  $Usia = $_POST['Usia'];
  $Alamat = $_POST['Alamat'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE anggota SET NRP='$NRP',Nama='$Nama' , Usia = '$Usia', Alamat = '$Alamat' ,  Username = '$Username',  Password = '$Password'  WHERE NRP='$NRP'");

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$NRP = $_GET['NRP'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM anggota WHERE NRP='$NRP'");

while ($data = mysqli_fetch_array($result)) {
  $Nama = $data['Nama'];
  $Usia = $data['Usia'];
  $Alamat = $data['Alamat'];
  $Username = $data['Username'];
  $Password = $data['Password'];
}
?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Update Data </h3>
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
      <form action="update_polisi.php" method="post" name="form1">
          <div class="mb-3">
              <label for="NRP" class="form-label">NRP</label>
            <input type="int"  name="NRP" value=<?php echo $NRP; ?>>
          </div>
        
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="Nama" name="Nama" value=<?php echo $Nama; ?>>
        </div>

        <div class="mb-3">
        <div class="mb-3">
          <label for="Usia" class="form-label">Usia</label>
          <input type="text" class="form-control" id="Usia" name="Usia" value=<?php echo $Usia; ?>>
        </div>

        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="Alamat" name="Alamat" value=<?php echo $Alamat; ?>>
        </div>

        <div class="mb-3">
          <label for="Username" class="form-label">Username</label>
          <input type="text" class="form-control" id="Username" name="Username" value=<?php echo $Username; ?>>
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="text" class="form-control" id="Password" name="Password" value=<?php echo $Password; ?>>
        </div>
        </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        
        
  </div>
      </form>

      <?php

      ?>
      <br>
      <a href="index.php?page=data-pegawai" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>


    </center>

  </div>

</body>

</html>