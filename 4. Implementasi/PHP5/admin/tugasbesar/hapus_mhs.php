<?php  
	include '../sistemnya.php';
	$nim=$_GET['id'];
	$idtb=$_GET['tugasbesar'];
	mysql_query("delete from tugasbesar_mahasiswa where id_tb='$idtb' and id_mahasiswa='$nim'");
	header('location:detail.php?id='.$idtb);
?>