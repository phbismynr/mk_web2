<!DOCTYPE html>
<html>
	<!-- Header -->
	<?php 
	session_start();

	include_once("function/koneksi.php");
	include_once("function/helper.php");
	?>
	<?php include_once 'partials/header.php'; ?>

	<body>
		<!-- Konten -->
		<div class="container">
			<div id="content" class="mt-4">
				<?php
					$filename = "pages/$page.php";
					
					if(file_exists($filename)){
						include_once($filename);
					}else{
						include_once("partials/main.php");
					}
				?>
			</div>
		</div>

		<!-- Footer -->
		<?php include_once 'partials/footer.php'; ?>	
	</body>

	
</html>