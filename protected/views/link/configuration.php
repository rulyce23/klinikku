<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbName="db_jurnal";
	$koneksi=mysqli_connect($host,$user,$password) or 
	die("Gagal Cuy ! :D");

	mysqli_select_db($koneksi,$dbName) or die(mysqli_error($koneksi));
?>