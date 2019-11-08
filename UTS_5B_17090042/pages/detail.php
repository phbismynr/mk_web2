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
        <?php
            $id_barang = $_GET['id_barang'];
            
            $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang' AND status='Ready'");
            $row = mysqli_fetch_assoc($query);
            
            echo "<div id='detail-barang'>
                        <h2>$row[nama_barang]</h2>
                        <div id='frame-gambar'>
                            <img src='".BASE_URL."images/barang/$row[gambar]' />
                        </div>
                        <div id='frame-harga'>
                            <span>".rupiah($row['harga'])."</span>
                            <a href='".BASE_URL."tambah_keranjang.php?id_barang=$row[id_barang]'>+ add to cart</a>
                        </div>
                        <div id='keterangan'>
                            <b>Keterangan : </b> $row[spesifikasi]
                        </div>
                    </div>";				
            
        ?>
        </div>
    </div>
</div>
