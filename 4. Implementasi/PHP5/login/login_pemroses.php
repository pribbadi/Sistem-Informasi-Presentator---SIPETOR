<?php 
	session_start();//memulai session

	//jika ada session 
	if (isset($_SESSION["username"])){
		header("Location: ../admin/halamanutama/");//maka diarahkan ke halaman admin
	}

	//koneksi
	include '../koneksi.php';
	
	//verifikasi (cek data masukan ($username dan $password) dengan data yang ada di dalam database)

	//jika username dan passwornya ada
	if(isset($_POST['username']) AND ($_POST['password'])){ //isset= mengecek apakah ada data yang di masukkan dari inputan username dan password
		$username = $_POST['username'];//membuat variabel  username dan mengecek dari database
		$password = md5($_POST['password']);//membuat variabel  password dan mengecek dari database
		
		//ADMIN
		$sql = "select * from admin where id_admin = '$username' AND password = '$password'  and status='1'";//membuat variabel sql untuk melihat data dari tabel admin pada field id_admin dan password
		$result = mysql_query($sql);//membuatvariabel result untuk melihat semua data dari tabel admin
		$jumlahditemukan=mysql_num_rows($result);


	 	//MAHASISWA
	 	$sqlmhs = "select * from mahasiswa where id_mahasiswa = '$username' AND password = '$password' and status='1'";//membuat variabel sql untuk melihat data dari tabel admin pada field id_admin dan password
		$resultmhs = mysql_query($sqlmhs);//membuatvariabel result untuk melihat semua data dari tabel admin
		$jumlahditemukanmhs=mysql_num_rows($resultmhs);

		if ($jumlahditemukan == 1){ //kondisi :melihat data per rows dari tabel admin apakah ada(1) atau tidak
		  	$row = mysql_fetch_array($result);//melihatkan perintah query berdasarkan objek oriented
		  	$_SESSION['username'] = $row['id_admin'];//session menyimpan informasi data (id_admin) pada server browser ynag kemudian akan di gunakan pada halaman lain maupun halamn itu sendiri
		  	$_SESSION['nama'] = $row['nama'];//session menyimpan informasi data (id_admin) pada server browser ynag kemudian akan di gunakan pada halaman lain maupun halamn itu sendiri
		  	$_SESSION['level'] = "admin";//memunculkan session admin karna login sebgai admin
		  	header("location:../admin/halamanutama/");//  meredirect ke kehalaman admin/index.php
	 	}
	 	else if ($jumlahditemukanmhs == 1){
	 	  	$rowmhs = mysql_fetch_array($resultmhs);//melihatkan perintah query berdasarkan objek oriented
		  	$_SESSION['username'] = $rowmhs['id_mahasiswa'];//session menyimpan informasi data (id_admin) pada server browser ynag kemudian akan di gunakan pada halaman lain maupun halamn itu sendiri
		  	$_SESSION['nama'] = $rowmhs['nama_mahasiswa'];//session menyimpan informasi data (id_admin) pada server browser ynag kemudian akan di gunakan pada halaman lain maupun halamn itu sendiri
		  	$_SESSION['level'] = "mahasiswa";//memunculkan session admin karna login sebgai admin
		  	header("location:../mhs/halamanutama/");//  meredirect ke kehalaman admin/index.php  
	 	}
	 	else{ //jika tidak: session pesan memunculkan tulisan username dan password salah karena tidak ada dalam database
  			$_SESSION['pesan']="Username atau Password salah";//memunculkan pesan username dan password salah karena tidak ada dalam database
  			header("location:../login/");//redirect ke halaman login/index.php
 		}
 
	}
	//jika username dan passwornya tidak ada/kosong:session akan memunculkan tulisan bahwa username dan pasword tidak boleh kosong
	else{
 		$_SESSION['pesan']="Username atau password tidak boleh kosong";//memunculkan pesan user namae dan password tidak boleh kosong
 		header("location:../login/");//redirect ke halaman login/index.php
	}
?>