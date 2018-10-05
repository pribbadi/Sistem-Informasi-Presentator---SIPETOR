<?php  
	include '../sistemnya.php';
	$arr=$_POST['demo3'];
	$jumlaharray=count($arr);
	$idtb=$_GET['id'];
	if ($jumlaharray>=0) {
		for ($i=0; $i < $jumlaharray; $i++) { 
			$nim=$arr[$i];
			mysql_query("INSERT INTO tugasbesar_mahasiswa values ('$idtb','$nim')");
		}
		header('location:detail.php?id='.$idtb);
	} else {
		header('location:detail.php?id='.$idtb);
	}
	
?>