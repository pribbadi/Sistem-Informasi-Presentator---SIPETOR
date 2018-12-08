<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="sipetor_2018"; // Database name
	$link=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
	//mysqli_select_db("$db_name")or die("cannot select DB");
 ?>