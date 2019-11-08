<?php

  $page = isset($_GET['page']) ? $_GET['page'] : false;
  $kategori_id = isset($_GET['id_kat']) ? $_GET['id_kat'] : false;
  
  $user_id = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
  $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
  $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
  $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
  $totalBarang = count($keranjang);

?>
<head>
  <?php include_once("inc_js.php") ?>
  <?php include_once("inc_css.php") ?>
		
		<title>OTOMODIF | Pusat Sparepart Motor</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		
    <script>
		$(function() {
			$('#slides').slidesjs({
				height: 350,
				play: { auto : true,
					    interval : 3000
					  },
				navigation : false
			});
		});
		</script>	

<?php include_once("navbar.php") ?>

</head>	