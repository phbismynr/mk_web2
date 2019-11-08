<?php

	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	
	$kategori = "";
	$status = "";
	$button = "Add";
	
	if($kategori_id){
		$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kat='$kategori_id'");
		$row = mysqli_fetch_assoc($queryKategori);
		
		$kategori = $row['kategori'];
		$status = $row['status'];
		$button = "Update";
	}

?>
<form action="<?php echo BASE_URL."module/kategori/action.php?kategori_id=$kategori_id"; ?>" method="POST">

	<div class="form-group">
		<label>Kategori</label>
		<span><input type="text" class="form-control" name="kategori" value="<?php echo $kategori; ?>" /></span>
	</div>

	<div class="form-group">
		<label>Status</label><br>
		<span>
			<input type="radio" name="status" value="Publish" <?php if($status == "Publish"){ echo "checked='true'"; } ?> /> Publish
			<input type="radio" name="status" value="Unpublish" <?php if($status == "Unpublish"){ echo "checked='true'"; } ?> /> Unpublish
		</span>
	</div>	

	<div class="element-form">
		<span><button type="submit" value="<?php echo $button; ?>" name="button" class="btn btn-danger">Update</button></span>
		
	</div>

</form>