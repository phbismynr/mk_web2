<?php 
$namaErr = $usernameErr = $passwordErr = $emailErr = "";
if(isset($_POST['save'])){
	if(!isset($_POST['nama']) || !isset($_POST['username']) || !isset($_POST['password']) || !$_POST['email']){
		if($_POST['nama'] == ""){
		$namaErr = "Nama tidak boleh kosong!";
		}
		if($_POST['username'] == ""){
			$usernameErr = "Username tidak boleh kosong!";
		}
		if($_POST['password'] == ""){
			$passwordErr = "Password tidak boleh kosong!";
		}
		if($_POST['email'] == ""){
			$emailErr = "Email tidak boleh kosong!";
		}
	}else{
		$id = $_GET['id'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$query = "INSERT INTO user (nama,username,password,email) VALUES('$nama', '$username', '$password', '$email')";
		$query = "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email' WHERE id=$id";
		if (mysqli_query($connect, $query)) {
			echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
		}
	}
}

$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>" class="btn btn-warning mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24">
    	<path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
	</svg> Back To Data
</a>
<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<label for="inputNama">Nama</label>
			<input type="text" name="nama" class="form-control" id="inputNama" value="<?= $data['nama'] ?>" maxlength="40" required autofocus>
			<small class="text-danger"><?= $namaErr == "" ? "":"* $namaErr " ?></small>
		</div>
		<div class="form-group">
			<label for="inputUsername">Username</label>
			<input type="username" name="username" class="form-control" id="inputUsername" value="<?= $data['username'] ?>" maxlength="30" required>
			<small class="text-danger"><?= $usernameErr == "" ? "":"* $usernameErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputPassword">Password</label>
			<input type="password" name="password" class="form-control" id="inputPassword" value="<?= $data['password'] ?>" maxlength="30" minlength="3" required>
			<small class="text-danger"><?= $passwordErr == "" ? "":"* $passwordErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" name="email" class="form-control" id="inputEmail" value="<?= $data['email'] ?>" maxlength="50" required>
			<small class="text-danger"><?= $emailErr == "" ? "":"* $emailErr" ?></small>
		</div>
		<input type="submit" class="btn btn-dark m-1" name="save" value="Update Now!">
	</form>
</div>
