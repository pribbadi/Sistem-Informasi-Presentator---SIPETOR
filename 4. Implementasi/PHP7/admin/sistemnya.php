<?php 
	$base_url="http://localhost/sipetor/"; 
	session_start(); //mulai session
	if (!(isset($_SESSION["username"]))){ //jika belum login akan diarahkan ke halaman login
		header("Location: $base_url");
	}

	$s_username=$_SESSION["username"]; //menangkap session username
	$s_level=$_SESSION["level"]; //menangkap sessio level
	$s_nama=$_SESSION["nama"]; //menangkap sessio level
	$namasistemnya="SiPeTor";

	include '../../koneksi.php';
	if ($s_level=='mahasiswa') {
		header("location:$base_url"."mhs/");//  meredirect ke kehalaman admin/index.php
	}
 ?>