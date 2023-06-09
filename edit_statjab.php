<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Update Data Jabatan </h3>
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
  $Id_jabatan = $_POST['Id_jabatan'];
  $Terhitung_mulai_tanggal = $_POST['Terhitung_mulai_tanggal'];
  $Masa_jabatan = $_POST['Masa_jabatan'];


  // update user data
  $result = mysqli_query($koneksi, "UPDATE status_jabatan SET NRP='$NRP', Id_jabatan='$Id_jabatan' , Terhitung_mulai_tanggal = '$Terhitung_mulai_tanggal', Masa_jabatan = '$Masa_jabatan'  WHERE Id_jabatan='$Id_jabatan'")
  ;

  // Redirect to homepage to display updated user in list
  header("Location: status_jabatan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Id_jabatan = $_GET['Id_jabatan'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM status_jabatan WHERE Id_jabatan='$Id_jabatan'");

while ($data = mysqli_fetch_array($result)) {
  $NRP = $data['NRP'];
  $Terhitung_mulai_tanggal = $data['Terhitung_mulai_tanggal'];
  $Masa_jabatan = $data['Masa_jabatan'];
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
      <form action="edit_statjab.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            <td>NRP</td>
            <td><input type="int" name="NRP" class="form-control" value=<?php echo $NRP; ?>></td>
          </tr>
          <tr>
            <td>ID Pendidikan</td>
            <td><input type="int" name="Id_jabatan" class="form-control" value=<?php echo $Id_jabatan; ?>></td>
          </tr>
          <tr>
            <td>Terhitung mulai tanggal</td>
            <td><input type="date" name="Terhitung_mulai_tanggal" class="form-control" value=<?php echo $Terhitung_mulai_tanggal; ?>></td>
          </tr>
          <tr>
            <td>Masa jabatan</td>
            <td><input type="number" name="Masa_jabatan" class="form-control" value=<?php echo $Masa_jabatan; ?>></td>
          </tr>
          <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
          </tr>
        </table>
      </form>

      <br>
      <a href="status_jabatan.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>