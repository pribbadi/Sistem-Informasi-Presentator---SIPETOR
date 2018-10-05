<?php 
	include '../sistemnya.php';
	$nm_baru=$_POST['nama_baru'];
	$pass_lama=$_POST['password_lama'];
	$pass_lama_md5=MD5($pass_lama);
	$nim=$_GET['id'];

	//jika ganti nama
	if (($pass_lama!=NULL) AND ($nm_baru==NULL)) {
		mysqli_query($link, "update mahasiswa set nama_mahasiswa='$nm_baru' where id_mahasiswa='$nim'");
		header('location:index.php');
	} else if (($pass_lama!=NULL) AND ($nm_baru!=NULL)) {
		$mhse=mysqli_query($link, "select * from mahasiswa where id_mahasiswa='$nim'");
	    $res_mhse=mysqli_fetch_array($mhse);
	    $pass_lama_database=$res_mhse['password'];
		//jika password sama
		if ($pass_lama_md5 == $pass_lama_database) {
			mysqli_query($link, "update mahasiswa set nama_mahasiswa='$nm_baru' where id_mahasiswa='$nim'");
			header('location:edit2.php?id='.$nim.'&nm='.$nm_baru);	
		} 
		//jika tidak
		else {
			header('location:edit.php?id='.$nim);
		}
	} else{
		header('location:index.php');
	}
?>