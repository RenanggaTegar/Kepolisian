<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_kepolisian");

// Check connection
if (!$koneksi) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
