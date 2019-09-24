<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
 <head>
	<title><?= $WEB_CONFIG['app_name'] ?></title>
	<link rel="stylesheet" href="assets/style.css">
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark fixed-top">
	  <a class="navbar-brand" href="#">
	    <img src="<?= $WEB_CONFIG['base_url'] ?>assets/img/icon.png" width="30" height="30" alt="">
	    <?= $WEB_CONFIG['app_name'] ?>
	  </a>
	</nav>

	<?php session_start();
	$content = (isset($_GET["page"])) ? $_GET["page"] : ""; ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<h2 class='text-uppercase'><?= $content ?> Data</h2>
			</div>
			<div class="col-md-10">
			<?php
			if(isset($_SESSION['flash'])){
				echo $_SESSION['flash'];
				unset($_SESSION['flash']);
			}

			switch ($content) {
				case 'add':
					require 'operasi/create.php';
					break;
				case 'delete':
					require 'operasi/delete.php';
					break;
				case 'update':
					require 'operasi/update.php';
					break;
				default:
					require 'operasi/read.php';
					break;
			} ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/script.js"></script>
	<script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>