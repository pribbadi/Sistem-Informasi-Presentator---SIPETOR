<?php 
	include '../sistemnya.php';
	$nm_sistem=$_POST['nama_sistem'];
	$kls=$_POST['kelas'];
	if (($nm_sistem!=NULL) AND ($kls!=NULL)){
		mysqli_query($link, "insert into tugasbesar values ('','$nm_sistem','1','$kls')");
		header('location:index.php');	
		// echo $nm_sistem;
		// echo $kls;
	}
?>