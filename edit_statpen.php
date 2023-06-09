<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Update Data Pendidikan </h3>
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
  $Id_pendidikan = $_POST['Id_pendidikan'];
  $Nama_sekolah = $_POST['Nama_sekolah'];
  $Tahun_masuk = $_POST['Tahun_masuk'];
  $Tahun_lulus = $_POST['Tahun_lulus'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE status_pendidikan SET NRP='$NRP', Id_pendidikan='$Id_pendidikan' , Nama_sekolah = '$Nama_sekolah', Tahun_masuk = '$Tahun_masuk',Tahun_lulus = '$Tahun_lulus'  WHERE Id_pendidikan='$Id_pendidikan'")
  ;

  // Redirect to homepage to display updated user in list
  header("Location: status_pendidikan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Id_pendidikan = $_GET['Id_pendidikan'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM status_pendidikan WHERE Id_pendidikan='$Id_pendidikan'");

while ($data = mysqli_fetch_array($result)) {
  $NRP = $data['NRP'];
  $Nama_sekolah = $data['Nama_sekolah'];
  $Tahun_masuk = $data['Tahun_masuk'];
  $Tahun_lulus = $data['Tahun_lulus'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Database - Kepolisian</title>
</head>

<body>

  <div class="container">
    <center>
      <h3>Silahkan Masukkan Data</h3>
      <form action="edit_statpen.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            
            <td>NRP</td>
            <td><input type="int" name="NRP" class="form-control" value=<?php echo $NRP; ?>></td>
          </tr>
          <tr>
            <td>ID Pendidikan</td>
            <td><input type="int" name="Id_pendidikan" class="form-control" value=<?php echo $Id_pendidikan; ?>></td>
          </tr>
          <tr>
            <td>Nama Sekolah</td>
            <td><input type="text" name="Nama_sekolah" class="form-control" value=<?php echo $Nama_sekolah; ?>></td>
          </tr>
          <tr>
            <td>Tahun Masuk</td>
            <td><input type="date" name="Tahun_masuk" class="form-control" value=<?php echo $Tahun_masuk; ?>></td>
          </tr>
          <tr>
            <td>Tahun Lulus</td>
            <td><input type="date" name="Tahun_lulus" class="form-control" value=<?php echo $Tahun_lulus; ?>></td>
          
          </tr>
          <tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
          </tr>
        </table>
      </form>

      <br>
      <a href="status_pendidikan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>