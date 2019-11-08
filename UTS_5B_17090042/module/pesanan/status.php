<?php

	$pesanan_id = $_GET["pesanan_id"];

	$query = mysqli_query($koneksi, "SELECT status FROM pesanan WHERE id_pesanan='$pesanan_id'");
	$row=mysqli_fetch_assoc($query);
	$status = $row['status'];
	
?>
<form action="<?php echo BASE_URL."module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" method="POST">
	 
	<div class="form-group">
		<label>ID Pesanan</label>    
		<span><input type="text" class="form-control" value="<?php echo $pesanan_id; ?>" name="pesanan_id" readonly="true" /></span>
	</div>  

	<div class="form-group">
  	<label for="sel1">Select list:</label>
  	<select class="form-control" name="status">
    <option><?php
				
					foreach($arrayStatusPesanan AS $key => $value){
						if($status == $key){
							echo "<option value='$key' selected='true'>$value</option>";
						}
						else{
							echo "<option value='$key'>$value</option>";
						}
					}
				
				?></option>
  	</select>
	</div> 
	<!-- <div class="element-form">
		<label>Status Pesanan</label>
		<span>
			<select name="status">
				<?php
				
					foreach($arrayStatusPesanan AS $key => $value){
						if($status == $key){
							echo "<option value='$key' selected='true'>$value</option>";
						}
						else{
							echo "<option value='$key'>$value</option>";
						}
					}
				
				?>
			</select>
		</span>
	</div> -->	
	
	<div class="element-form">
		<span><button type="submit" value="Edit Status" name="button" class="btn btn-danger">Update</button></span>
	</div>	
	
</form>  