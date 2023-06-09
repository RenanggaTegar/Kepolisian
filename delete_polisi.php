<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$NRP = $_GET['NRP'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM anggota WHERE NRP='$NRP'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=data-pegawai");
