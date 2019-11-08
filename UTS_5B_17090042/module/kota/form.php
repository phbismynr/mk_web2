<?php

	$kota_id = isset($_GET['kota_id']) ? $_GET['kota_id'] : false;
	
	$kota = "";
	$tarif = "";
	$status = "";
	$button = "Add";

	if($kota_id){
		$queryKota = mysqli_query($koneksi, "SELECT * FROM kota WHERE id_kota='$kota_id'");
		$row=mysqli_fetch_assoc($queryKota);
		
		$kota = $row['kota'];
		$tarif = $row['tarif'];
		$status = $row['status'];
		
		$button = "Update";
	}
		
?>		
<form action="<?php echo BASE_URL."module/kota/action.php?kota_id=$kota_id"?>" method="post">

	<div class="form-group">
		<label>Kota Tujuan</label>	
		<span><input type="text" name="kota" class="form-control" value="<?php echo $kota; ?>" /></span>
	</div>		

	<div class="form-group">
		<label>Tarif</label>	
		<span><input type="text" name="tarif" class="form-control" value="<?php echo $tarif; ?>" /></span>
	</div>		

	<div class="form-group">
		<label>Jasa Pengiriman</label><br>
		<span>
			<input type="radio" name="status" value="Aktif" <?php if($status == "Aktif"){ echo "checked"; } ?> /> Aktif
			<input type="radio" name="status" value="Tidak" <?php if($status == "Tidak"){ echo "checked"; } ?> /> Tidak
		</span>
	</div>		
	
	<div class="element-form">
		<span><button type="submit" value="<?php echo $button; ?>" name="button" class="btn btn-danger">Tambah</button></span>
		
	</div>		

</form>		