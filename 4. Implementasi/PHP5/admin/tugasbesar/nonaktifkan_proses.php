<?php 
	include '../sistemnya.php';
	$idd=$_GET['id'];
	$status='0';
	$sql=mysql_query("select * from tugasbesar where id_tb='$idd'");
	$jml=mysql_num_rows($sql);
	echo $jml;
	if ($jml<1) {
		header('location:nonaktifkan.php?id=$idd');
	} else {
		//id_mahasiswa, nama_mahasiswa, password, status
		mysql_query("update tugasbesar set status='$status' where id_tb='$idd'");
		header('location:index.php');
	}
?>