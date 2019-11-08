<?php

	include_once("../../function/koneksi.php");
	include_once("../../function/helper.php");
	
	session_start();
	
	$pesanan_id = $_GET['pesanan_id'];
	$button = $_POST['button'];
	
	if($button == "Konfirmasi"){
	
		$user_id = $_SESSION["user_id"];
		$nomor_rekening = $_POST['nomor_rekening'];
		$nama_account = $_POST['nama_account'];
		$tanggal_transfer = $_POST['tanggal_transfer'];
		
		$queryPembayaran = mysqli_query($koneksi, "INSERT INTO konfirmasi_pembayaran (id_pesanan, nomor_rekening, nama_account, tanggal_transfer)
																			VALUES ('$pesanan_id', '$nomor_rekening', '$nama_account', '$tanggal_transfer')");
																			
		if($queryPembayaran){
			mysqli_query($koneksi, "UPDATE pesanan SET status='1' WHERE id_pesanan='$pesanan_id'");
		}
		
	}else if($button == "Edit Status"){
		$status = $_POST["status"];
		
		mysqli_query($koneksi, "UPDATE pesanan SET status='$status' WHERE id_pesanan='$pesanan_id'");
		
		if($status == "2"){
			$query = mysqli_query($koneksi, "SELECT * FROM detail_pesanan WHERE id_pesanan='$pesanan_id'");
			while($row=mysqli_fetch_assoc($query)){
				$barang_id = $row["id_barang"];
				$quantity = $row["quantity"];
				
				mysqli_query($koneksi, "UPDATE barang SET stok=stok-$quantity WHERE id_barang='$barang_id'");
			}
		}
	}
	
	header("location:".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");