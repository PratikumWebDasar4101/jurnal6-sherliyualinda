<?php
if (isset($_POST['submit'])) {
	$nim =$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas =$_POST['kelas'];
	$jenis_kelamin =$_POST['jenis_kelamin'];
	$hobby =$_POST['hobby'];
	$fakultas =$_POST['fakultas'];
	$alamat =$_POST['alamat'];

	$query ="INSERT INTO `siswa`(`nama`, `nim`, `kelas`, `jenis_kelamin`, `hobby`, `fakultas`, `alamat`) 
			VALUES ('$nama','$nim','$kelas','$jenis_kelamin','$hobby','$fakultas','$alamat')";
	$query_success = mysqli_query($conn,$query);

	if ($query_success) {
		header('location: akhir.php');
	}else{
		die(mysql_error($conn));
	}

}
  ?>