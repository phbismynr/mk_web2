<?php 
$query = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($connect, $query);
 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=add" class="btn btn-primary mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1 m">
	    <path fill="#fff" d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
	</svg> Add New
</a>
<div class="box_table">
	<table class="table table-sm">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th width="20%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php while($data = mysqli_fetch_array($result)) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $data['nama'] ?></td>
				<td><?= $data['username'] ?></td>
				<td><?= $data['password'] ?></td>
				<td><?= $data['email'] ?></td>
				<td>
					<a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=update&id=<?= $data['id'] ?>" class="btn btn-success m-1">
					<svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
					    <path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12H20A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4V2M18.78,3C18.61,3 18.43,3.07 18.3,3.2L17.08,4.41L19.58,6.91L20.8,5.7C21.06,5.44 21.06,5 20.8,4.75L19.25,3.2C19.12,3.07 18.95,3 18.78,3M16.37,5.12L9,12.5V15H11.5L18.87,7.62L16.37,5.12Z" />
					</svg> Edit</a>
					<a href="javascript:alertDelete(<?= $data['id'] ?>);" class="btn btn-danger m1">
					<svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
					    <path fill="#fff" d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
					</svg> Delete</a>
				</td>
			</tr>
			<?php $no++ ?>
			<?php endwhile; ?>
		</tbody>
	</table>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm To Delete Data</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" id="deleteButtonModal">Delete Now!</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function alertDelete(idn) {
	$('#deleteButtonModal').attr('href', '<?= $WEB_CONFIG['base_url'] ?>index.php?page=delete&id='+idn);
	$('#deleteModal').modal('show');
}
</script>