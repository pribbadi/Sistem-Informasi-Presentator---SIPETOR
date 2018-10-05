<?php 
	include '../sistemnya.php';
	$id_tb=$_GET['id'];
	$nama=$_POST['nama_sistem'];
	$kelas=$_POST['kelas'];
	if (($kelas!=NULL) AND ($nama!=NULL)) {
		echo "$nama <br>";
		echo "$kelas <br>";
		mysql_query("update tugasbesar set id_kelas='$kelas', nama_sistem='$nama' where id_tb='$id_tb'");
		header('location:index.php');
	} else {
		header('location:edit.php?id='.$id_tb);
	}
	
?>