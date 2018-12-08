<?php 
	include '../sistemnya.php';
	$id_mahasiswa=$_POST['nim'];
	$kls=$_POST['kelas'];
	$a_hasil=$_POST['analisis_hasil'];
	$a_pemahaman=$_POST['analisis_pemahaman'];
	$a_komentar=$_POST['analisis_komentar'];
	$d_hasil=$_POST['desain_hasil'];
	$d_pemahaman=$_POST['desain_pemahaman'];
	$d_komentar=$_POST['desain_komentar'];
	$i_hasil=$_POST['implementasi_hasil'];
	$i_pemahaman=$_POST['implementasi_pemahaman'];
	$i_komentar=$_POST['implementasi_komentar'];
	if (!(isset($id_mahasiswa)) AND !(isset($kls))) {
		// echo "A";
		header('location:index.php');	
	} 

	if (($id_mahasiswa!=NULL) AND ($kls!=NULL) AND ($username!=NULL)){
		// echo "B <br>";
		echo $a_hasil."<br>";
		echo $a_pemahaman."<br>";
		echo $a_komentar."<br>";
		echo $d_hasil."<br>";
		echo $d_pemahaman."<br>";
		echo $d_komentar."<br>";
		echo $i_hasil."<br>";
		echo $i_pemahaman."<br>";
		echo $i_komentar."<br>";
		mysqli_query($link, "insert into presentasi 
						(
							id_mahasiswa,
							status,
							id_admin,
							analisis_hasil,
							analisis_pemahaman,
							analisis_komentar,
							desain_hasil,
							desain_pemahaman,
							desain_komentar,
							implementasi_hasil,
							implementasi_pemahaman,
							implementasi_komentar
						) 
					  values 
					  	(
						  	'$id_mahasiswa',
						  	'1',
						  	'$s_username',
						  	'$a_hasil',
						  	'$a_pemahaman',
						  	'$a_komentar',
						  	'$d_hasil',
						  	'$d_pemahaman',
						  	'$d_komentar',
						  	'$i_hasil',
						  	'$i_pemahaman',
						  	'$i_komentar'				  	
					  	)");
		header('location:index.php');
	}
	else {
		// echo "C";
		// echo "ada yang salah";
		header('location:index.php');
	}	
?>