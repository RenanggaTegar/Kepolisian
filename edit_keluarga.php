<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Update Data Keluarga </h3>
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
  $Id_keluarga = $_POST['Id_keluarga'];
  $NRP = $_POST['NRP'];
  $Nama = $_POST['Nama'];
  $Status_Hubungan = $_POST['Status_Hubungan'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE keluarga SET Id_keluarga='$Id_keluarga',NRP='$NRP' , Nama = '$Nama', Status_Hubungan = '$Status_Hubungan' WHERE Id_keluarga='$Id_keluarga'");

  // Redirect to homepage to display updated user in list
  header("Location: status_keluarga.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Id_keluarga = $_GET['Id_keluarga'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM keluarga WHERE Id_keluarga='$Id_keluarga'");

while ($data = mysqli_fetch_array($result)) {
  $NRP = $data['NRP'];
  $Nama = $data['Nama'];
  $Status_Hubungan = $data['Status_Hubungan'];
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
      <form action="edit_keluarga.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            
            <td>ID Keluarga</td>
            <td><input type="int" name="Id_keluarga" class="form-control" value=<?php echo $Id_keluarga; ?>></td>
          </tr>
          <tr>
            <td>NRP</td>
            <td><input type="int" name="NRP" class="form-control" value=<?php echo $NRP; ?>></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" class="form-control" value=<?php echo $Nama; ?>></td>
          </tr>
          <tr>
            <td>Status Hubungan</td>
            <td><select name="Status_Hubungan" class="form-control" value=<?php echo $Status_Hubungan; ?>>
              <option value="">-- Pilih --
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
          </tr>
          <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" name="update" value="Update Data"></td>
          </tr>
        </table>
      </form>

      <br>
      <a href="status_keluarga.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>