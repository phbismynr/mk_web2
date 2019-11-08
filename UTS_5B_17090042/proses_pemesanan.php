<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	session_start();
	
	$nama_penerima = $_POST["nama_penerima"];
	$nomor_telepon = $_POST["nomor_telepon"];
	$alamat = $_POST["alamat"];
	$kota = $_POST["kota"];
	
	$user_id = $_SESSION['id_user'];
	$waktu_saat_ini = date("Y-m-d H:i:s");
	
	$query = mysqli_query($koneksi, "INSERT INTO pesanan (nama_penerima, id_user, nomor_telepon, id_kota, alamat, tanggal_pemesanan, status)
												VALUES ('$nama_penerima', '$user_id', '$nomor_telepon', '$kota', '$alamat', '$waktu_saat_ini', '0')");
												
	if($query){
		$last_pesanan_id = mysqli_insert_id($koneksi);
		
		$keranjang = $_SESSION['keranjang'];
		
		foreach($keranjang AS $key => $value){
			$barang_id = $key;
			$quantity = $value['quantity'];
			$harga = $value['harga'];
			
			mysqli_query($koneksi, "INSERT INTO detail_pesanan(id_pesanan, id_barang, quantity, harga)
												   VALUES ('$last_pesanan_id', '$barang_id', '$quantity', '$harga')");
		}
		
		unset($_SESSION["keranjang"]);
		
		header("location:".BASE_URL."index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=$last_pesanan_id");
	}