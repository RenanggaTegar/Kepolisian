<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Jabatan Anggota</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="add_jabatan.php" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<div>
				<a href="status_jabatan.php" class="btn btn-info">
					<i class="fa fa-flag"></i> Liat status jabatan</a>
			</div>
			<table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Jabatan</th>
          <th scope="col">Nama Jabatan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $hasil = mysqli_query($koneksi, "SELECT * FROM jabatan")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['Id_jabatan'] . "</td>";
          echo "<td>" . $data['Nama_jabatan'] . "</td>";
          echo "<td>
            <a href='edit_jabatan.php?Id_jabatan=$data[Id_jabatan] ' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>
            <a href='delete_jabatan.php?Id_jabatan=$data[Id_jabatan] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
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