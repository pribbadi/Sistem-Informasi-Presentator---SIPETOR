<?php  
	include '../sistemnya.php';
	echo "Mahasiswa yang Anda pilih: <br/>";
	//echo implode('<br>', $_POST['demo3']);
	$arr=$_POST['demo3'];
	$jumlaharray=count($arr);
	if ($jumlaharray>=0) {
		for ($i=0; $i < $jumlaharray; $i++) { 
			$nim=$arr[$i];
			$idkelas=$_GET['id'];
			mysqli_query($link,"INSERT INTO kelas_mahasiswa values ('$idkelas','$nim')");
		}
		header('location:detail.php?id='.$idkelas);
	} else {
		header('location:detail.php?id='.$idkelas);
	}
	
?>