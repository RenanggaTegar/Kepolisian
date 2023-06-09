<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Pendidikan </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="add_pendidikan.php" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<div>
				<a href="status_pendidikan.php" class="btn btn-info">
					<i class="fa fa-flag"></i> Liat status pendidikan</a>
			</div>
			<table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Pendidikan</th>
          <th scope="col">Tingkat pendidikan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $hasil = mysqli_query($koneksi, "SELECT * FROM pendidikan")
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['Id_pendidikan'] . "</td>";
          echo "<td>" . $data['Tingkat_pendidikan'] . "</td>";
          
          echo "<td>
            <a href='edit_pendidikan.php?Id_pendidikan=$data[Id_pendidikan] ' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>
            <a href='delete_pendidikan.php?Id_pendidikan=$data[Id_pendidikan] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
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