<?php
    include("../../function/koneksi.php");   
    include("../../function/helper.php");   
     
    $user_id = $_GET['user_id'];
	
    $nama = $_POST['nama'];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$alamat = $_POST["alamat"];
	$level = $_POST["level"];
	$status = $_POST["status"];	

	mysqli_query($koneksi, "UPDATE user SET nama='$nama',
											   email='$email',
											   notelp='$phone',
											   alamat='$alamat',
											   level='$level',
											   status='$status'
											   WHERE id_user='$user_id'");

    header("location: ".BASE_URL."index.php?page=my_profile&module=user&action=list");
?>