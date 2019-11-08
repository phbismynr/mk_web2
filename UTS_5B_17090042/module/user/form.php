<?php
      
    $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : "";
      
	$button = "Update";
	$queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$user_id'");
	 
	$row=mysqli_fetch_array($queryUser);
	  
	$nama = $row["nama"];
	$email = $row["email"];
	$phone = $row["notelp"];
	$alamat = $row["alamat"];
	$status = $row["status"];
	$level = $row["level"];
?>
<form action="<?php echo BASE_URL."module/user/action.php?user_id=$user_id"?>" method="POST">
	  
	<div class="form-group">
		<label>Nama Lengkap</label>	
		<span><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" /></span>
	</div>	

	<div class="form-group">
		<label>Email</label>	
		<span><input type="text" class="form-control" name="email" value="<?php echo $email; ?>" /></span>
	</div>		

	<div class="form-group">
		<label>Phone</label>	
		<span><input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" /></span>
	</div>	

	<div class="form-group">
		<label>Alamat</label>	
		<span><input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" /></span>
	</div>		

	<div class="form-group">
		<label>Level</label><br>	
		<span>
			<label class="radio-inline"><input type="radio" value="SuperAdmin" name="level" <?php if($level == "SuperAdmin"){ echo "checked"; } ?> /> Superadmin</label>
			<input type="radio" value="Customer" name="level" <?php if($level == "Customer"){ echo "checked"; } ?> /> Customer			
		</span>
	</div>	

	<div class="form-group">
		<label>Status Member</label><br>
		<span>
			<input type="radio" value="Aktif" name="status" <?php if($status == "Aktif"){ echo "checked"; } ?> /> Aktif
			<input type="radio" value="Tidak" name="status" <?php if($status == "Tidak"){ echo "checked"; } ?> /> Tidak Aktif		
		</span>
	</div>		
	  
	<div class="element-form">
		<span><button type="submit" value="Edit Status" name="button" value="<?php echo $button; ?>" class="btn btn-danger">UPDATE STATUS</button></span>
		
	</div>	
</form>