<?php
	include 'shop/productlist.php';

	$id = $_GET["id"];
?>

<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<title> <?php echo $product_name[$id] ?> </title>
	</head>

	<body>
		<?php include "./nav.php"; ?>

		<div class="banner">
			<?php
				if(file_exists('shop/product_img/'.$product_name[$id].'/Video.webm')) { //Video falls vorhanden
					echo ' <video autoplay class="Video" loop playsinline Poster="shop/product_img/'.$product_name[$id].'/Shop.jpg" muted> <source src="shop/product_img/'.$product_name[$id].'/Video.webm" type="Video/Webm"> </video> ';
				}
				elseif(file_exists('shop/product_img/'.$product_name[$id].'/Shop.jpg')) { //Titelbild falls kein Video vorhanden ist
			 		echo ' <img src=" shop/product_img/'.$product_name[$id].'/Shop.jpg "> ';
				}
			 ?>
			 <div class="logo">
				 <div class="logo_info_wrapper">
					  <?php echo ' <img src="shop/product_img/'.$product_name[$id].'/Logo.png" class="logo"> ' ?>
				 </div>
			 </div>
		 </div>

		<div class="info">
			<div class="text">
				<div class="title">
					<h1> <?php echo $product_name[$id] ?> </h1>
					<div class="wishlist">
						<?php
							session_start();

							//Creates a new Array if there are no elements
							if(!isset($_SESSION['wishlist'])) {
								$_SESSION['wishlist'] = array();
							}

							if(!in_array($id, $_SESSION['wishlist'])) {
								echo '
								<div class="wishlist_button">
									<form action="./wunschliste.php">
										<button type="submit" name="id" value="'.$id.'">
											<img src="resources/Add.png">
											<p> Auf die Wunschliste </p>
										</button>
									</form>
								</div>
								';
							} else {
								echo '
								<div class="wishlist_button">
									<form action="./wunschliste.php">
										<button type="submit" name="clear" value="'.$id.'">
											<p> Von der Wunschliste entfernen </p>
										</button>
									</form>
								</div>
								';
							}
						?>
					</div>
				</div>

				<p> <?php echo $product_description[$id] ?> </p>

				<div class="purchase">
					<form action="./warenkorb.php">
						<?php
							echo '<input type="hidden" name="id" value="'.$id.'"/>';
							for($edition = 0; $edition < sizeof($product_editions[$id]); $edition++) {
								if($product_price[$id][$edition] > 0) {
									$price = $product_price[$id][$edition] . "€";
								} elseif($product_price[$id][$edition] == 0) {
									$price = "Kostenlos";
								}
								echo '
									<button type="submit" name="edition" value="'.$edition.'">
										<img src="shop/product_img/'.$product_name[$id].'/Edition_'.$edition.'.jpg" class="primary">
										<p class="edition"> '.$product_editions[$id][$edition].' </p>
										<p class="price"> '.$price.' </p>
									</button>
								';
							}
						?>
					</form>
				</div>
			</div>

			<div class="gallery">
				<?php
					for($row = 1; $row < 15; $row++) {
						if(file_exists('shop/product_img/'.$product_name[$id].'/Gallery_'.$row.'.jpg')) { //Überprüft ob das Bild exisiert
							echo '<img src="shop/product_img/'.$product_name[$id].'/Gallery_'.$row.'.jpg">';
						};
					};
				?>
			</div>
		</div>
		</div>
	</body>
</html>
