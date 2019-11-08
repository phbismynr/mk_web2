<?php

	if($user_id){
		header("location: ".BASE_URL);
	}

?>


<div id="container-user-akses">
	<h3><b>MASUK</b></h3><br>
	<form action="<?php echo BASE_URL."proses_login.php"; ?>" class="was-validated" method="POST">
	
		<?php
		
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			
			if($notif == true){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong><i class='fas fa-times'></i> Gagal!</strong> Email atau Password yang anda masukkan salah.</div>";
			}
		
		?>
		<div class="form-group">
    	<label for="email">Email</label>
    	<input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Email dengan benar.</div>
  		</div>
  		<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Password dengan benar.</div>
  		</div>
  		<button type="submit" value="login" class="btn btn-danger">Masuk</button>
  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belum punya akun? <a href='/otomodif/index.php?page=register'><b>Daftar</b></a>
		
	
	</form>
	
</div>