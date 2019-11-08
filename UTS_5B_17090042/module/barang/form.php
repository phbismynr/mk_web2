<?php

	$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;
	
	$nama_barang = "";
	$kategori_id = "";
	$spesifikasi = "";
	$gambar = "";
	$stok = "";
	$harga = "";
	$status = "";
	$keterangan_gambar = "";
	$button = "Add";
	
	if($barang_id){
		$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$barang_id'");
		$row = mysqli_fetch_assoc($query);
		
		$nama_barang = $row['nama_barang'];
		$kategori_id = $row['id_kat'];
		$spesifikasi = $row['spesifikasi'];
		$gambar = $row['gambar'];
		$harga = $row['harga'];
		$stok = $row['stok'];
		$status = $row['status'];
		$button = "Update";
		
		$keterangan_gambar = "(Klik pilih gambar jika ingin mengganti gambar disamping)";
		$gambar = "<img src='".BASE_URL."images/barang/$gambar' style='width: 200px;vertical-align: middle;' />";
	}

?>

<script src="<?php echo BASE_URL."js/ckeditor/ckeditor.js"; ?>"></script>

<form action="<?php echo BASE_URL."module/barang/action.php?barang_id=$barang_id"; ?>" method="POST" enctype="multipart/form-data">

	<div class="form-group">
  	<label for="sel1">Kategori</label>
  	<select class="form-control" name="kategori_id">
    <option><?php
					$query = mysqli_query($koneksi, "SELECT id_kat, kategori FROM kategori WHERE status='Publish' ORDER BY kategori ASC");
					while($row=mysqli_fetch_assoc($query)){
						if($kategori_id == $row['id_kat']){
							echo "<option value='$row[id_kat]' selected='true'>$row[kategori]</option>";
						}else{
							echo "<option value='$row[id_kat]'>$row[kategori]</option>";
						}
					}
				?>
	</option>
  	</select>
	</div> 

<!-- 	<div class="element-form">
		<label>Kategori</label>
		<span>
			
			<select name="kategori_id">
				<?php
					$query = mysqli_query($koneksi, "SELECT id_kat, kategori FROM kategori WHERE status='Publish' ORDER BY kategori ASC");
					while($row=mysqli_fetch_assoc($query)){
						if($kategori_id == $row['id_kat']){
							echo "<option value='$row[id_kat]' selected='true'>$row[kategori]</option>";
						}else{
							echo "<option value='$row[id_kat]'>$row[kategori]</option>";
						}
					}
				?>
			</select>
		
		</span>
	</div> -->

	<div class="form-group">
		<label>Nama Barang</label>
		<span><input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>" /></span>
	</div>	

	<div style="margin-bottom:10px">
		<label>Spesifikasi Barang</label>
		<span><textarea name="spesifikasi" id="editor"><?php echo $spesifikasi; ?></textarea></span>
	</div>	
	
	<div class="form-group">
		<label>Stok Barang</label>
		<span><input type="text" name="stok" class="form-control" value="<?php echo $stok; ?>" /></span>
	</div>	

	<div class="form-group">
		<label>Harga Barang</label>
		<span><input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>" /></span>
	</div>

	<div class="form-group">
		<label>Gambar Barang <?php echo $keterangan_gambar; ?></label><br>
		<span>
			<input type="file" name="file" /> <?php echo $gambar; ?>
		</span>
	</div>		
	
	<div class="form-group">
		<label>Status Barang</label><br>
		<span>
			<input type="radio" name="status" value="Ready" <?php if($status == "Ready"){ echo "checked='true'"; } ?> /> Ready
			<input type="radio" name="status" value="Tidak Ready" <?php if($status == "Tidak Ready"){ echo "checked='true'"; } ?> /> Tidak Ready
		</span>
	</div>	

	<div class="element-form">
		<span><button type="submit" value="<?php echo $button; ?>" name="button" class="btn btn-danger">Tambah</button></span>
	</div>

</form>

<script>
	CKEDITOR.replace("editor");
</script>