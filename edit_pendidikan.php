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
  $Id_pendidikan = $_POST['Id_pendidikan'];
  $Tingkat_pendidikan = $_POST['Tingkat_pendidikan'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE pendidikan SET Id_pendidikan='$Id_pendidikan',Tingkat_pendidikan='$Tingkat_pendidikan'  WHERE Id_pendidikan='$Id_pendidikan'");

  // Redirect to homepage to display updated user in list
  header("Location: index.php?page=data-pengguna");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Id_pendidikan = $_GET['Id_pendidikan'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE Id_pendidikan='$Id_pendidikan'");

while ($data = mysqli_fetch_array($result)) {
  $Tingkat_pendidikan = $data['Tingkat_pendidikan'];
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
      <form action="edit_pendidikan.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            
            <td>ID Pendidikan</td>
            <td><input type="int" name="Id_pendidikan" class="form-control" value=<?php echo $Id_pendidikan; ?>></td>
          </tr>
          <tr>
            <td>Tingkat Pendidikan</td>
            <td><select type name="Tingkat_pendidikan" class="form-control" value=<?php echo $Tingkat_pendidikan; ?> ><option value="SD">SD
              <option value="SMP">SMP
              <option value="SMA">SMA
              <option value="AKPOL">AKPOL
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
      <a href="index.php?page=data-pengguna" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>