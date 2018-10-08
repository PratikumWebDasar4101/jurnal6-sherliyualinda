<?php 
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<table>
		<thead>
			<th>Nama</th>
			<th>NIM</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Hobby</th>
			<th>Fakultas</th>
			<th>Alamat</th>
		</thead>
		<tbody>
		<?php 
		$query ="SELECT `nama`, `nim`, `kelas`, `jenis_kelamin`, `hobby`, `fakultas`, `alamat` FROM `siswa` WHERE 1";
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($row =mysqli_fetch_assoc($result)){
		 ?>
		 	<tr>
		 		<td><?php echo $row['nama'];  ?></td>
		 		<td><?php echo $row['nim'];  ?></td>
		 		<td><?php echo $row['kelas'];  ?></td>
		 		<td><?php echo $row['jenis_kelamin'];  ?></td>
		 		<td><?php echo $row['hobby'];  ?></td>
		 		<td><?php echo $row['fakultas'];  ?></td>
		 		<td><?php echo $row['alamat'];  ?></td>
		 		td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
		 	</tr>
		 	<?php
		 		}
		 	}else{
		 		echo "no result";
		 	}
	 	  ?>
		 </tbody>
	</table>
	<a href="form.php">Tambah Data</a>
</body>
</html>