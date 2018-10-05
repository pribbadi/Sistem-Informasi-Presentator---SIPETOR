<?php 
	session_start();
	if (!(isset($_SESSION["username"]))){//jika tida ada sessiion dari username
		//maka diarahkan ke halaman admin
		header("Location: ../");
	}

	if ($_SESSION['level']=='admin') {//
		header('location:../admin/');
	}
echo "ini halaman mahasiswa";
 ?>
  <a href="../logout/logout.php">logout</a>
