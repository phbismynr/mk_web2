<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<ul class="list-group">
				<li class="list-group-item list-group-item-danger bg-danger "><center><span style="color: #ffffff;">KATEGORI</span></center></li>
				<li class="list-group-item">        
				<?php 	
					echo kategori($kategori_id);
				?>
				</li>
			</ul>
		</div>
		<div class="col-lg-9">
			<h3>&nbsp;&nbsp;<b>SPAREPART TERBARU</b></h3>
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						if($kategori_id){
							$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='Ready' AND id_kat='$kategori_id' ORDER BY rand() DESC LIMIT 6");
						}else{
							$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='Ready' ORDER BY rand() DESC LIMIT 6");
						}

						$no=1;
						while($row=mysqli_fetch_assoc($query)){
					?>
					<div class="col-md-4 mx-auto mb-4">
						<div class="card shadow">
							<div class="inner">
								<a href='<?= BASE_URL."index.php?page=detail&id_barang=$row[id_barang]" ?>'>
									<img class="card-img-top" title="<?= $row["nama_barang"]; ?>" src="<?= BASE_URL."images/barang/$row[gambar]";?>" height="160px" >
								</a>
							</div>
							<div class="card-body text-center">
							<h5 class="card-title" style="">
								<a href="<?= BASE_URL."index.php?page=detail&id_barang=$row[id_barang]" ?>" title="<?= $row["nama_barang"]; ?>"><b><?= mb_strimwidth($row["nama_barang"], 0, 18, " .."); ?></b></a>
							</h5>
							<p class="card-text">
								<b><?= rupiah($row['harga']) ?></b><br>
								<?= "Stok : $row[stok]"; ?>
							</p>
							<a href="<?= BASE_URL."tambah_keranjang.php?id_barang=$row[id_barang]"; ?>" class='btn btn-danger' role='button' title='Tambah Keranjang'><i class='fas fa-plus'></i> Keranjang</a></a>
							</div>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>	
		</div>
	</div>
</div>
