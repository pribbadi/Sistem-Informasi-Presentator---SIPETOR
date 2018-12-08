<?php 
	$base_url="http://localhost/sipetor_2018/"; 
	session_start(); //mulai session
	if (!(isset($_SESSION["username"]))){ //jika belum login akan diarahkan ke halaman login
		header("Location: $base_url");
	}

	$s_username=$_SESSION["username"]; //menangkap session username
	$s_level=$_SESSION["level"]; //menangkap sessio level
	$s_nama=$_SESSION["nama"]; //menangkap sessio level
	$namasistemnya="SiPeTor";

	include '../../koneksi.php';
	if ($s_level=='admin') {
		header('location:$base_url'.'admin/');//  meredirect ke kehalaman admin/index.php
	}
 ?>