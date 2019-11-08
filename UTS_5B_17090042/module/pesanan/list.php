<?php

	if($level == "SuperAdmin"){
		$queryPesanan = mysqli_query($koneksi, "SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.id_user=user.id_user ORDER BY pesanan.tanggal_pemesanan DESC");
	}else{
		$queryPesanan = mysqli_query($koneksi, "SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.id_user=user.id_user WHERE pesanan.id_user='$user_id' ORDER BY pesanan.tanggal_pemesanan DESC");
	}
	
	if(mysqli_num_rows($queryPesanan) == 0){
		echo "<h3>Saat ini belum ada data pesanan</h3>";
	}
	else{
			
		echo "<h3><b>KELOLA PESANAN</b></h3>";
		echo "<table class='table table-bordered table-striped table-hover'>
				<tr class='baris-title'>
					<th class='kiri'>ID Pesanan</th>
					<th class='tengah'>Status Pesanan</th>
					<th class='tengah'>Nama Pembeli</th>
					<th class='tengah'>Aksi</th>
				</tr>";
		
		$adminButton = "";
		while($row=mysqli_fetch_assoc($queryPesanan)){
			if($level == "superadmin"){
				$adminButton = "<a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=status&pesanan_id=$row[pesanan_id]' class='btn btn-dark' role='button' title='Update Pesanan'></i>Update</a> ";
			}
		
			$status = $row['status'];
			echo "<tr>
					<td class='kiri'>$row[id_pesanan]</td>
					<td class='kiri'>$arrayStatusPesanan[$status]</td>
					<td class='kiri'>$row[nama]</td>
					<td class='tengah'>
						<a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=$row[id_pesanan]' class='btn btn-dark' role='button' title='Detail Pesanan'></i>Detail</a>
						$adminButton
					</td>
				 </tr>";
		}
		
		echo "</table>";
	}
	
?>