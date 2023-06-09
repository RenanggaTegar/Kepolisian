<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Update Data </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
<?php
// include database connection file
require 'connection.php';
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $NRP = $_POST['NRP'];
  $Nama = $_POST['Nama'];
  $Usia = $_POST['Usia'];
  $Jenis_kelamin = $_POST['Jenis_kelamin'];
  $Alamat = $_POST['Alamat'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE anggota SET NRP='$NRP',Nama='$Nama' , Usia = '$Usia', Jenis_kelamin='$Jenis_kelamin', Alamat = '$Alamat' ,  Username = '$Username',  Password = '$Password'  WHERE NRP='$NRP'");

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
  $Jenis_kelamin = $data['Jenis_kelamin'];
  $Alamat = $data['Alamat'];
  $Username = $data['Username'];
  $Password = $data['Password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Praktikum Antar Muka</title>
</head>

<body>

  <div class="container">
    <center>
      <h3>Silahkan Masukkan Data</h3>
      <form action="edit_polisi.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            
            <td>NRP</td>
            <td><input type="text" name="NRP" class="form-control" value=<?php echo $NRP; ?>></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" class="form-control" value=<?php echo $Nama; ?>></td>
          </tr>
          <tr>
            <td>Usia</td>
            <td><input type="number" name="Usia" class="form-control" value=<?php echo $Usia; ?>></td>
          </tr>
          <td>Jenis_kelamin</td>
            <td>
                <select class="form-control" id="Jenis_kelamin" name="Jenis kelamin">
                <option value="">-- Pilih --
                <option value="Laki-laki">Laki-Laki
                <option value="Perempuan">Perempuan
              </select>
            </td>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" class="form-control" value=<?php echo $Alamat; ?>></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="Username" class="form-control" value=<?php echo $Username; ?>></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="Password" class="form-control" value=<?php echo $Password; ?>></td>
          </tr>
          <td></td>
          <td><input href="index.php?page=data-pegawai" class="btn btn-success" type="submit" name="update" value="Update Data"></td>
          </tr>
        </table>
      </form>

      <br>
      <a href="index.php?page=data-pegawai" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>