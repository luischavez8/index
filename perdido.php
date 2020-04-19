<?php
require'denegar_admin.php';

require'class/database.php';
$objData = new Database();

$sth = $objData->prepare("SELECT * FROM usuarios WHERE id=:id");
$id=$_REQUEST['id'];

$sth->bindParam(':id', $id);
$sth->execute();

$result = $sth->fetchAll();

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Indexer</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.3/aos.css">
	<link rel="stylesheet" href="vendors/popup/magnific-popup.css">
	<link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css">

	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<div id="myContainer">
		<section class="banner-area section-gap mt-34">
			<div class="container">
				<div class="row align-items-center bg-white">
					<div class="col-lg-6 col-md-6">
						<div class="left_side owl-carousel owl-banner">
							<img  src="2.png" alt="" width="900" height="500">
						</div>
					</div>

					<div class="offset-lg-1 col-lg-4 col-md-6">
						<a href="tabla.php" class="primary-btn">Volver</a>
						<div class="right_side">

							<img src="perfil.jpg" width="100" height="100">
							<h1>
								 <?php
                 					if($result){
                						foreach ($result as $key => $value) {?>
								<?php echo $value['nombre'];?>
							</h1>
								<?php
									}
								}
								?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>