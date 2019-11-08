<?php
              if($totalBarang != 0){
                echo "<h4 ><b>Total Keranjangmu $totalBarang</b></h4>";
              }
            ?>
            
<?php
	if($totalBarang == 0){
		echo "<center><h3>Yaah masih kosong, ayo belanja sekarang juga.</h3></center>";
	}else{
	
		$no=1;
		
		echo "<table class='table table-bordered table-striped table-hover'>
			<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Gambar</center></th>
					<th><center>Barang</center></th>
					<th><center>Jumlah</center></th>
					<th><center>Harga</center></th>
					<th><center>Total Harga</center></th>
				</tr>
			</thead>";
		
		$subtotal = 0;		
		foreach($keranjang AS $key => $value){
			$barang_id = $key;
			
			$nama_barang = $value["nama_barang"];
			$quantity = $value["quantity"];
			$gambar = $value["gambar"];
			$harga = $value["harga"];
			
			$total = $quantity * $harga;
			$subtotal = $subtotal + $total;
			
			echo "<br><tr>
					<td><center>$no</center></td>
					<td><center><img src='".BASE_URL."images/barang/$gambar' height='80px' /></center></td>
					<td><center>$nama_barang</center></td>
					<td><center><input type='text' name='$barang_id' value='$quantity' class='update-quantity' /></center></td>
					<td><center>".rupiah($harga)."</center></td>
					<td class='kanan hapus_item'><center>".rupiah($total)."</center> <a href='".BASE_URL."hapus_item.php?barang_id=$barang_id' class='close'>&times;</a></td>
				</tr>";
				
			$no++;	
		
		}
		
		echo "<tr>
				<td colspan='5' class='kanan'><b>Sub Total</b></td>
				<td class='kanan'><b>".rupiah($subtotal)."</b></td>
			  </tr>";
		
		echo "</table>";
		echo "<div align='right'><a href='".BASE_URL."index.php?page=data_pemesan' class='btn btn-dark' role='button' title='Checkout Pesanan'></i>Checkout</a></div>";
	
	}

?>

<script>

	$(".update-quantity").on("input", function(e){
		var barang_id = $(this).attr("name");
		var value = $(this).val();
		
		$.ajax({
			method: "POST",
			url: "update_keranjang.php",
			data: "id_barang="+barang_id+"&value="+value
		})
		.done(function(data){
			location.reload();
		});
		
	});

</script>