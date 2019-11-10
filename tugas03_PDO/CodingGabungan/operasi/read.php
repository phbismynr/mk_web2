<?php 
include 'config.php';
$query = $db->prepare("SELECT * FROM user");
$query->execute();
$data = $query->fetchAll();
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">TTL</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    <?php foreach ($data as $value): ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $value['username'] ?></td>
        <td><?php echo $value['password'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['ttl'] ?></td>
        <td><?php echo $value['alamat'] ?></td>
        <td><img src="./img/<?php echo $value['foto'] ?>" alt="foto" width="50px" height="50px"></td>
        <td>
            <a href="index.php?page=update&id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
            <a href="javascript:void(0);" class="btn btn-danger deleteModalButton" data-toggle="modal">Delete</a>
        </td>
    </tr>

    <form action="operasi/delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $value['id']?>"/>
    <input type="hidden" name="foto" value="<?php echo $value['foto']?>"/>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin untuk menghapusnya ?</p>
          </div>
          <div class="modal-footer">
            <button type="submit" name="accept" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
    </form>

    <?php $no++ ?>
    <?php endforeach; ?>
  </tbody>
</table>

<script>
  $(document).on('click','.deleteModalButton', function(){
    $('#deleteModal').modal('show');
  });
</script>

