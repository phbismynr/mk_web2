<?php
    require 'config.php';
    if(!isset($_GET['id'])){
        die("Error: id Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM user WHERE id = :id");
    $query->bindParam(":id", $_GET['id']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: ID Tidak Ditemukan");
    }else{
        $data = $query->fetch();
    }
    if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $ttl = $_POST['ttl'];
      $alamat = $_POST['alamat'];
      $last_foto = $_POST['last_foto'];

      $namaFile = $_FILES['foto']['name'];
      $namaSementara = $_FILES['foto']['tmp_name'];
      $dirUpload = "./img/";
      $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);      

        if($terupload){
          $foto= $namaFile;
          //melepas / menghapus foto yang digantikan
          unlink("./img/$last_foto");
        }else{
          $foto= $last_foto;
        }

        $query = $db->prepare("UPDATE user SET `username`=:username, `password`=:password,`email`=:email,`ttl`=:ttl,`alamat`=:alamat,`foto`=:foto WHERE id=:id");

        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);
        $query->bindParam(":email", $email);
        $query->bindParam(":ttl", $ttl);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":foto", $foto);
        $query->bindParam(":id", $_GET['id']);
        $query->execute();

        $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data sudah diubah</div>";
        header("location: index.php");
    }
?>

<form method="post" enctype="multipart/form-data" style="width: 100%;">
  <input type="hidden" name="id" required>
  <div class="form-group">
    <label>USERNAME</label>
    <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>" required>
  </div>
  <div class="form-group">
    <label>PASSWORD</label>
    <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>" required>
  </div>
  <div class="form-group">
    <label>EMAIL</label>
    <input name="email" class="form-control" type="email" value="<?php echo $data['email'] ?>" required>
  </div>
  <div class="form-group">
    <label>TTL</label>
    <input name="ttl" class="form-control" type="text" value="<?php echo $data['ttl'] ?>" required>
  </div>
  <div class="form-group">
    <label>ALAMAT</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5" required><?php echo $data['alamat'] ?></textarea>
  </div>
  <div class="form-group">
    <label>FOTO</label><br/>
    <input type="hidden" name="last_foto" id="last_foto" value="<?php echo $data['foto'] ?>">
    <img id="image-preview" class="mb-2" alt="image preview" src="./img/<?php echo $data['foto'] ?>" width="100px" height="100px"/><br>
    <input type="file" class="form-control" id="image-source" class="form-control-file" name="foto">
  </div>
  <input type="submit" class="btn btn-success" name="submit" value="EDIT">
</form>

<script>
var uploadField = document.getElementById("image-source");
  uploadField.onchange = function() {
      if(this.files[0].size >= 200000){
        alert("File foto tidak boleh melebihi 200 kb, silahkan kompres gambar terlebih dahulu");
        this.value = "";
      }else{
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
        oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };    
    };
  
  };
</script>