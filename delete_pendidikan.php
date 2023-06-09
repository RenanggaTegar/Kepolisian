<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$Id_pendidikan = $_GET['Id_pendidikan'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pendidikan WHERE Id_pendidikan='$Id_pendidikan'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=data-pengguna");
