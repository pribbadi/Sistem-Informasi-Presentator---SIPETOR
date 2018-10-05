<?php  
	include '../sistemnya.php';
	echo "Mahasiswa yang Anda pilih: <br/>";
	//echo implode('<br>', $_POST['demo3']);
	$nim=$_GET['id'];
	$idkelas=$_GET['kls'];
	mysql_query("delete from kelas_mahasiswa where id_kelas='$idkelas' and id_mahasiswa='$nim'");
	header('location:detail.php?id='.$idkelas);
?>