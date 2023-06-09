<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$Id_jabatan = $_GET['Id_jabatan'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM jabatan WHERE Id_jabatan='$Id_jabatan'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=data-profil");
