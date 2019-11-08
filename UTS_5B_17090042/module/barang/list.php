<div id="frame-tambah">
	<a href='<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=form"; ?>'  class='btn btn-info' role='button' title='Tambah Kategori'><i class="fas fa-plus"></i> Tambah Barang</a>
	
</div>

<?php

	$query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.id_kat=kategori.id_kat");
	
	if(mysqli_num_rows($query) == 0){
		echo "<h3>Saat ini belum ada barang di dalam table barang</h3>";
	}else{
	
		echo "<table class='table table-bordered table-striped table-hover'>";
		
		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='tengah'>Nama Barang</th>
				<th class='tengah'>Kategori</th>
				<th class='tengah'>Harga</th>
				<th class='tengah'>Status</th>
				<th class='tengah'>Aksi</th>
			 </tr>";
			 
		$no=1;
		while($row=mysqli_fetch_assoc($query)){
			
			echo "<tr>
					<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[nama_barang]</td>
					<td class='kiri'>$row[kategori]</td>
					<td>".rupiah($row['harga'])."</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a href='".BASE_URL."index.php?page=my_profile&module=barang&action=form&barang_id=$row[id_barang]'><b><i class='fas fa-edit fa-lg'></i></b></a>
					</td>
				  </tr>";
				  
			$no++;
		}
		
		echo "</table>";
	
	}

?>