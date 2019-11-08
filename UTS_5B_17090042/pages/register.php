<div id="container-user-akses">
	<h3><b>PENDAFTARAN</b></h3><br>
	<form action="<?php echo BASE_URL."proses_register.php"; ?>" class="was-validated" method="POST">
	
		<?php
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
			$email = isset($_GET['email']) ? $_GET['email'] : false;
			$notelp = isset($_GET['notelp']) ? $_GET['notelp'] : false;
			$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
			
			if($notif == "require"){
				echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
			}else if($notif == "password"){
				echo "<div class='notif'>Maaf, password yang kamu masukkan tidak sama.</div>";
			}else if($notif == "email"){
				echo "<div class='notif'>Maaf, email sudah terdaftar.</div>";
			}
		?>
		<div class="form-group">
    	<label for="nama">Nama Lengkap</label>
    	<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Nama dengan benar.</div>
  		</div>

  		<div class="form-group">
    	<label for="email">Email</label>
    	<input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="<?php echo $email; ?>" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Email dengan benar.</div>
  		</div>

  		<div class="form-group">
    	<label for="notelp">No HP</label>
    	<input type="text" class="form-control" id="notelp" placeholder="Masukkan No HP" name="notelp" value="<?php echo $notelp; ?>" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi No HP dengan benar.</div>
  		</div>

  		<div class="form-group">
    	<label for="alamat">Alamat</label>
    	<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo $alamat; ?>" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Alamat dengan benar.</div>
  		</div>

  		<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Password dengan benar.</div>
  		</div>

  		<div class="form-group">
    	<label for="re_password">Ketik Ulang Password</label>
    	<input type="password" class="form-control" id="re_password" placeholder="Masukkan Password" name="re_password" required>
    	<div class="valid-feedback">Benar.</div>
    	<div class="invalid-feedback">Silahkan isi Password dengan benar.</div>
  		</div>

  		<button type="submit" value="register" class="btn btn-danger">Daftar</button>
  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sudah punya akun? <a href='/otomodif/index.php?page=login'><b>Masuk</b></a>

		<!-- <div class="element-form">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
		</div> -->

		<!-- <div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
		</div> -->

		<!-- <div class="element-form">
			<label>Nomor Telepon / Handphone</label>
			<span><input type="text" name="phone" value="<?php echo $notelp; ?>" /></span>
		</div> -->

		<!-- <div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
		</div> -->
	
		<!-- <div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>	

		<div class="element-form">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
		</div>	 -->

		<!-- <div class="element-form">
			<span><input type="submit" value="register" /></span>
		</div>	 -->
	
	</form>
	
</div>