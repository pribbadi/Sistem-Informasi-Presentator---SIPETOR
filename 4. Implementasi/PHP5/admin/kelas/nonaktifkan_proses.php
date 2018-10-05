<?php 
	include '../sistemnya.php';
	$idkelas=$_GET['id'];
	$status='0';
	$sql=mysql_query("select * from kelas where id_kelas='$idkelas'");
	$jml=mysql_num_rows($sql);
	echo $jml;
	if ($jml<1) {
		header('location:nonaktifkan.php?id=$idkelas');
	} else {
		//id_mahasiswa, nama_mahasiswa, password, status
		mysql_query("update kelas set status='$status' where id_kelas='$idkelas'");
		header('location:index.php');
	}
?>