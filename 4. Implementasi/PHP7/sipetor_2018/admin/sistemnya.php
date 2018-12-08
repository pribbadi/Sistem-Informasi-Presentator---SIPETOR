<?php 
	$base_url="http://localhost/sipetor_2018/"; 
	session_start(); //mulai session
	if (!(isset($_SESSION["username"]))){ //jika belum login akan diarahkan ke halaman login
		header("Location: $base_url");
	}

	$username=$_SESSION["username"]; //menangkap session username
	$level=$_SESSION["level"]; //menangkap sessio level
	$nama=$_SESSION["nama"]; //menangkap sessio level
	$namasistemnya="SiPeTor";

	include '../../koneksi.php';
 ?>