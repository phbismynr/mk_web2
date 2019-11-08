<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "phbweb2_otomodif";
	
	$koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi ke database gagal");
	