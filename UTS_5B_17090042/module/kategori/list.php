
<div id="frame-tambah">
	<a href='<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>'  class='btn btn-info' role='button' title='Tambah Kategori'><i class="fas fa-plus"></i> Tambah Kategori</a>
</div>

<?php

	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");
	
	if(mysqli_num_rows($queryKategori) == 0){
		echo "<h3>Saat ini belum ada nama kategori di dalam table kategori</h3>";
	}else{
		
		echo "<table class='table table-bordered table-striped table-hover'>";
		
		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='tengah'>Kategori Barang</th>
				<th class='tengah'>Status Barang</th>
				<th class='tengah'>Aksi</th>
			 </tr>";
			 
		$no=1;
		while($row=mysqli_fetch_assoc($queryKategori)){
			
			echo "<tr>
					<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
					<a href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[id_kat]'><b><i class='fas fa-edit fa-lg'></i></b></a>
					</td>
				  </tr>";
				  
			$no++;
		}
		
		echo "</table>";
	
	}

?>