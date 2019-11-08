<div id="frame-tambah">
	<a href='<?php echo BASE_URL."index.php?page=my_profile&module=kota&action=form"; ?>'  class='btn btn-info' role='button' title='Tambah Kategori'><i class="fas fa-plus"></i> Tambah Pengiriman</a>
	
</div>

<?php

	$queryKota = mysqli_query($koneksi, "SELECT * FROM kota ORDER BY kota ASC");
	
	if(mysqli_num_rows($queryKota) == 0){
		echo "<h3>Saat ini belum ada nama kota yang didalam database.</h3>";
	}
	else{
		echo "<table class='table table-bordered table-striped table-hover'>";
		
			echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>Kota Tujuan</th>
					<th class='tengah'>Tarif</th>
					<th class='tengah'>Status</th>
					<th class='tengah'>Aksi</th>
				 </tr>";
				 
			$no = 1;
			while($rowKota=mysqli_fetch_assoc($queryKota)){
				echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td>$rowKota[kota]</td>
						<td>".rupiah($rowKota['tarif'])."</td>
						<td class='tengah'>$rowKota[status]</td>
						<td class='tengah'>
							<a href='".BASE_URL."index.php?page=my_profile&module=kota&action=form&kota_id=$rowKota[id_kota]"."'><b><i class='fas fa-edit fa-lg'></i></b></a>
						</td>
					 </tr>";
				
				$no++;
			}
		
		echo "</table>";
	}
?>