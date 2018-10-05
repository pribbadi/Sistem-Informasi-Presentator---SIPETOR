<?php 
	include '../sistemnya.php';
	$nm=$_POST['nama'];
	$ta=$_POST['tahun_akademik'];
	$smt=$_POST['semester'];
	$id=$ta.$nm.$smt;
	echo "$id";
	if (($nm!=NULL) AND ($ta!=NULL) AND ($smt!=NULL)){
		$sql=mysqli_query($link,"select * from kelas where id_kelas='$id'");
		$jml=mysqli_num_rows($sql);
		echo $jml;
		if ($jml==0) {
			mysqli_query($link,"insert into kelas values ('$id','$nm','$ta','$smt','1')");
			header('location:index.php');
		} else{
			header('location:tambah.php');
		}
	}
	else {
		header('location:tambah.php');
	}	
?>