<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pegawai</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="add_polisi.php" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
      <div>
				<a href="status_keluarga.php" class="btn btn-info">
					<i class="fa fa-flag"></i> Liat status keluarga</a>
			</div>
			<table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">NRP</th>
          <th scope="col">Nama</th>
          <th scope="col">Tempat lahir</th>
          <th scope="col">Tgl lahir</th>
          <th scope="col">Usia</th>
          <th scope="col">Jenis kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $hasil = mysqli_query($koneksi, "SELECT * FROM anggota")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['NRP'] . "</td>";
          echo "<td>" . $data['Nama'] . "</td>";
          echo "<td>" . $data['Tempat_lahir'] . "</td>";
          echo "<td>" . $data['Tgl_lahir'] . "</td>";
          echo "<td>" . $data['Usia'] . "</td>";
          echo "<td>" . $data['Jenis_kelamin'] . "</td>";
          echo "<td>" . $data['Alamat'] . "</td>";
          echo "<td>" . $data['Username'] . "</td>";
          echo "<td>" . $data['Password'] . "</td>";
          echo "<td>
            <a href='edit_polisi.php?NRP=$data[NRP]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a> 
            <a href='delete_polisi.php?NRP=$data[NRP] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            <a href='?page=view-pegawai&NRP=$data[NRP]' class='btn btn-info  btn-sm' style='font-weight: 600;'>View</a>
            </td>";
          echo "</tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>