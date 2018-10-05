<?php 
	include '../sistemnya.php';
	$kelas_lama=$_GET['id'];
	$kls=$_POST['nama'];
	$ta=$_POST['tahun_akademik'];
	$smt=$_POST['semester'];
	$kelas_baru=$ta.$kls.$smt;
	echo $kelas_lama.'<br>';
	echo $kelas_baru.'<br>';

	if ($kelas_lama==$kelas_baru) {
		header('location:detail.php?id='.$kelas_lama);
	} else {
		mysql_query("update kelas set id_kelas='$kelas_baru', kelas='$kls', tahun_akademik='$ta', semester='$smt' where id_kelas='$kelas_lama'");
		mysql_query("update kelas_mahasiswa set id_kelas='$kelas_baru' where id_kelas='$kelas_lama'");
		header('location:detail.php?id='.$kelas_baru);
	}
	
?>