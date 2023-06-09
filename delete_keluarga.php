<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$Id_keluarga = $_GET['Id_keluarga'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM keluarga WHERE Id_keluarga='$Id_keluarga'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:status_keluarga.php");
