<?php

	session_start();
	
	$keranjang = $_SESSION["keranjang"];
	$barang_id = $_POST["id_barang"];
	$value = $_POST["value"];
	
	$keranjang[$barang_id]["quantity"] = $value;
	
	$_SESSION["keranjang"] = $keranjang;