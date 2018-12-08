<?php 
	include '../sistemnya.php';
	$nim=$_GET['id'];
	$status='0';
	$sql=mysqli_query($link,"select * from mahasiswa where id_mahasiswa='$nim'");
	$jml=mysqli_num_rows($sql);
	echo $jml;
	if ($jml<1) {
		header('location:nonaktifkan.php?id=$nim');
	} else {
		//id_mahasiswa, nama_mahasiswa, password, status
		mysqli_query($link,"update mahasiswa set status='$status' where id_mahasiswa='$nim'");
		header('location:index.php');
	}
?>