<?php

	define("BASE_URL", "http://localhost/otomodif/");
	
	$arrayStatusPesanan[0] = "Menunggu Pembayaran";
	$arrayStatusPesanan[1] = "Pembayaran Sedang Di Validasi";
	$arrayStatusPesanan[2] = "Lunas";
	$arrayStatusPesanan[3] = "Pembayaran Di Tolak";
	
	function rupiah($nilai = 0){
		$string = "Rp," . number_format($nilai);
		return $string;
	}
	
	function kategori($id_kategori = false){
		global $koneksi;
		
		$string = "<div id='menu-kategori'>";
			
			$string .= "<ul>";
				
					$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='Publish'");
					
					while($row=mysqli_fetch_assoc($query)){
						if($id_kategori == $row['id_kat']){
							$string .= "<li><a href='".BASE_URL."index.php?id_kategori=$row[id_kat]' class='active'>$row[kategori]</a></li>";
						}else{
							$string .= "<li><a href='".BASE_URL."index.php?id_kategori=$row[id_kat]'>$row[kategori]</a></li>";
						}
					}
			
			$string .= "</ul>";
		
		$string .= "</div>";		
		
		return $string;
	}