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
  $Id_jabatan = $_POST['Id_jabatan'];
  $Nama_jabatan = $_POST['Nama_jabatan'];

  // update user data
  $result = mysqli_query($koneksi, "UPDATE jabatan SET Id_jabatan='$Id_jabatan',Nama_jabatan='$Nama_jabatan'  WHERE Id_jabatan='$Id_jabatan'");

  // Redirect to homepage to display updated user in list
  header("Location: index.php?page=data-profil");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Id_jabatan = $_GET['Id_jabatan'];
// echo $id_barang;
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM jabatan WHERE Id_jabatan='$Id_jabatan'");

while ($data = mysqli_fetch_array($result)) {
  $Nama_jabatan = $data['Nama_jabatan'];
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
      <form action="edit_jabatan.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr>
            <td>ID Jabatan</td>
            <td><input type="int" name="Id_jabatan" class="form-control" value=<?php echo $Id_jabatan; ?>></td>
          </tr>
          <tr>
            <td>Nama Jabatan</td>
            <td><select type name="Nama_jabatan" class="form-control" value=<?php echo $Nama_jabatan; ?> ><option value="Ipda">Ipda
              <option value="Iptu">Iptu
              <option value="AKP">AKP
              <option value="Kompol">Kompol
              <option value="AKBP">AKBP
              <option value="Kombes Pol">Kombes Pol
              <option value="Brigjen Pol">Brigjen Pol
              <option value="Irjen Pol">Irjen Pol
              <option value="Komjen Pol">Komjen Pol
              <option value="Jenderal">Jenderal
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
      <a href="index.php?page=data-profil" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>