<?php 
	include '../sistemnya.php';
	$pass_baru=$_POST['password_baru'];
	$repass_baru=$_POST['repassword_baru'];
	$pass_baru_md5=MD5($pass_baru);
	$nim=$_GET['id'];
	//jika ganti nama
	if (($pass_baru==NULL) AND ($repass_baru==NULL)) {
		header('location:edit2.php?id='.$nim.'&nm='.$nm_baru);
	} else if (($pass_baru!=NULL) AND ($repass_baru!=NULL)) {
		if ($pass_baru==$repass_baru) {
			// echo "sama, tinggal proses edit";
			// echo "<br> $pass_baru";
			// echo "<br> $repass_baru";
			// echo "<br> $pass_baru_md5";
			mysql_query("update mahasiswa set password='$pass_baru_md5' where id_mahasiswa='$nim'");
			header('location:index.php');
		} else {
			header('location:edit2.php?id='.$nim.'&nm='.$nm_baru);
		}
		
	} else{
		header('location:edit2.php?id='.$nim.'&nm='.$nm_baru);
	}
?>