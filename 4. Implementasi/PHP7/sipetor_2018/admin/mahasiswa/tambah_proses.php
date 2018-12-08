<?php 
	include '../sistemnya.php';
	$nim=$_POST['id'];
	$nm=$_POST['nama'];
	$pass=$_POST['password'];
	$pass_md5=MD5($pass);
	$repass=$_POST['repassword'];

	echo $nim.'<br>';
	echo $nm.'<br>';
	echo $pass.'<br>';
	echo $repass.'<br>';
	if ((is_nan($nim)==TRUE) AND (strlen($nim)!=10) AND ($nim==NULL)  AND ($nm==NULL) AND ($pass==NULL) AND ($repass==NULL)) {
		header('location:tambah.php');
	}
	else if ((is_nan($nim)==TRUE) OR (strlen($nim)!=10) OR ($nim==NULL) OR ($nm==NULL) OR ($pass==NULL) OR ($repass==NULL)) {
		header('location:tambah.php');
	}
	else if (($nim!=NULL) AND ($nm!=NULL) AND ($pass!=NULL) AND ($repass!=NULL)) {
		$sql=mysqli_query($link,"select * from mahasiswa where id_mahasiswa='$nim'");
		$jml=mysqli_num_rows($sql);
		echo $jml;
		if ($jml>=1) {
			header('location:tambah.php');
		} else if ($pass != $repass) {
			header('location:tambah.php');
		} else {
			//id_mahasiswa, nama_mahasiswa, password, status
			mysqli_query($link,"insert into mahasiswa values ('$nim','$nm','$pass_md5','1')");
			header('location:index.php');
		}
	}	
?>