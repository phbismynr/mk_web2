<?php
require_once 'config.php';

if (isset($_POST['create'])) {
    $query = "INSERT INTO user(username,password,nama,ttl,alamat,email,foto) VALUE(?,?,?,?,?,?,?)";

    $namaFile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    $dirUpload = "./img/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    if ($terupload) {
        try {
            $stmt = $db->prepare($query);
            $stmt->execute([$_POST['username'], $_POST['password'], @$_POST['nama'], $_POST['ttl'], $_POST['alamat'], $_POST['email'], $namaFile]);
            if ($stmt->rowCount() >= 1) {
                $_SESSION['flash'] = "Berhasil ditambahkan";
            }
        } catch (PDOException $th) {
            $_SESSION['flash'] = $th->getMessage();
        }
    } else {
        $_SESSION['flash'] = "Foto gagal terupload";
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_SESSION['flash'])) : ?>
        <div class="alert alert-info">
            <?= $_SESSION['flash'] ?>
        </div>
    <?php endif;
    unset($_SESSION['flash']); ?>
    <div class="form-group">
        <label>USERNAME</label>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group">
        <label>PASSWORD</label>
        <input type="text" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label>NAMA</label>
        <input name="nama" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label>EMAIL</label>
        <input name="email" class="form-control" type="email" required>
    </div>
    <div class="form-group">
        <label>TTL</label>
        <input name="ttl" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label>ALAMAT</label>
        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5" required></textarea>
    </div>
    <div class="form-group">
        <label>FOTO</label><br />
        <input type="file" class="form-control" id="image-source" class="form-control-file" name="foto">
    </div>
    <input type="submit" class="btn btn-success" name="create" value="TAMBAH">
</form>