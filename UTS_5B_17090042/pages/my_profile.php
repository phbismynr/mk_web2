<!-- ini harusnya juga pelanggan dan admin dibedakan -->
<?php
	
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	}else{
		header("location: ".BASE_URL."index.php?page=login");
	}

?>

<div id="bg-page-profile">
	
	<div class="row">
		<div class="col-sm-4 col-md-3 sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item bg-info active">
            <center>MAIN MENU</center>
        </span>
        <?php
				if($level == "SuperAdmin"){
			?>
        
        <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=list"; ?>" class="list-group-item">
            <i class="fas fa-align-justify"></i> Kelola Kategori
        </a>
        <a href="<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=list"; ?>" class="list-group-item">
            <i class="fas fa-shopping-bag"></i> Kelola Barang
        </a>
        <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kota&action=list"; ?>" class="list-group-item">
            <i class="fas fa-shipping-fast"></i> Kelola Pengiriman
        </a>
        <a href="<?php echo BASE_URL."index.php?page=my_profile&module=user&action=list"; ?>" class="list-group-item">
            <i class="fas fa-users"></i> Kelola Member
        </a>
        <?php
				}
			?>
            
        <a href="<?php echo BASE_URL."index.php?page=my_profile&module=pesanan&action=list"; ?>" class="list-group-item">
            <i class="fas fa-dolly-flatbed"></i> Kelola Pesanan 
        </a>
        
    </div>        
</div>

	
	
	<div id="profile-content">
		<?php
			$file = "module/$module/$action.php";
			if(file_exists($file)){
				include_once($file);
			}else{
				echo "<h3>Maaf, halaman tersebut tidak ditemukan</h3>";
			}
		?>
	</div>

</div>
</div>