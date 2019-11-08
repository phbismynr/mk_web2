<!-- Start Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">

  <!-- Navbar Logo -->
  <a class="navbar-brand" href="<?php echo BASE_URL."index.php"; ?>">
        <img src="<?php echo BASE_URL."images/Otomodif.png"; ?>" alt="Logo" style="width:250px;">
      </a>   

  
<!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-icon"><i class="fas fa-bars"></i></span>
      </button>

<!-- Header Navbar Links -->

      <div class="collapse navbar-collapse " id="collapsibleNavbar" >

        <ul class="navbar-nav ml-auto">

          <a href="<?php echo BASE_URL."index.php"; ?>"><b><span style="color: #ffffff;">Beranda</span></b></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <!-- <a href="<?php echo BASE_URL."index.php"; ?>"><b><span style="color: #ffffff;">Hubungi</span></b></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
          <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
            <img src="<?php echo BASE_URL."images/cart.png"; ?>" /> 
            <?php
              if($totalBarang != 0){
                echo "<span class='total-barang'>$totalBarang</span>";
              }
            ?>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <div id="user">
            <?php
              if($user_id){
                echo "<span style='color: #ffffff;''>Selamat Datang</span></b> <b><span style='color: #ffee05;''>$nama</span></b>&nbsp;&nbsp;&nbsp;
                    <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'><b><span style='color: #ffffff;''>Pesanan Saya</span></b></a> &nbsp;&nbsp;<span style='color: #ffffff;''>|</span> &nbsp;
                    <a href='".BASE_URL."logout.php'><b><span style='color: #ffffff;''>Keluar</span></b></a>&nbsp;&nbsp;";
              }else{
                echo "&nbsp;&nbsp;<span style='color: #ffffff;''>|</span> &nbsp;&nbsp;&nbsp;&nbsp;<a href='".BASE_URL."index.php?page=login'><b><span style='color: #ffffff;''>Masuk</span></b></a> &nbsp;
                    <a href='".BASE_URL."index.php?page=register'  class='btn btn-outline-light' role='button' title='Daftar Sekarang'></i>Daftar</a>";
              }
            ?>
          </div>
          
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation Bar -->  