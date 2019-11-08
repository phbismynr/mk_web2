<?php

	$pesanan_id = $_GET["pesanan_id"];

?>

<table class="table-list">

	<form action="<?php echo BASE_URL."module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" method="POST">
	
		<div class="form-group">
			<label>Nomor Rekening</label>
			<span><input type="text" class="form-control" name="nomor_rekening" /></span>
		</div>	

		<div class="form-group">
			<label>Nama Account</label>
			<span><input type="text" class="form-control" name="nama_account" /></span>
		</div>		
	
		<div class="form-group">
			<label>Tanggal Transfer (format: yyyy-mm-dd)</label>
			<span><input type="text" class="form-control" name="tanggal_transfer" /></span>
		</div>	

		<div class="form-group">
			<span><button type="submit" value="Konfirmasi" class="btn btn-danger">Konfirmasi</button></span>
		</div>		
	
	</form>

</table>