<?php  
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$nama =$_POST['nama'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$konfirmasi_password =$_POST['konfirmasi_password'];


	$query = "INSERT INTO `user`( `username`,
	 							  `password`,
	 							   `nama`)
	 		 VALUES ('$username','$password','$nama')";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header('location: halUtama.php');
	}else{
		echo "gagal registrasi";
	}
}
?>