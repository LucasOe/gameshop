<?php
	include 'shop/productlist.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="./style/stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<title> Wunschliste </title>
	</head>

	<body>
		<?php include "./nav.php"; ?>

		<?php
			session_start();

			//Erstellt ein neues Array falls keins existiert
			if(!isset($_SESSION['wishlist'])) {
				$_SESSION['wishlist'] = array();
			}

			//Fügt Produkt zur Wunschliste hinzu, falls id als Query String übergeben wird
			if(isset($_GET["id"])) {
				$id = $_GET["id"];
				//Überprüft ob das Produkt bereits in der Wunschliste vorhanden ist
				if(!in_array($id, $_SESSION['wishlist'])) {
					array_push($_SESSION['wishlist'],$id);
				}
			}

			//Entfernt das Produkt von der Wunschliste, falls clear als Query String übergeben wird
			if(isset($_GET["clear"])) {
				$clear = $_GET["clear"];
				$key = array_search($clear, $_SESSION['wishlist']);
				unset($_SESSION['wishlist'][$key]);
			}
		?>

		<div class="cart">
			<?php
				$wishlist = $_SESSION['wishlist'];
				$edition = $_SESSION['cart_edition'];
				foreach($wishlist as $id) {
					//Fügt Euro zeichen hinterm Preis hinzu. Falls der Preis 0 beträgt, wird er zu "Kostenlos" geändert.
					if($product_price[$id][0] > 0) {
						$price = $product_price[$id][0] . "€";
					} elseif($product_price[$id][0] == 0) {
						$price = "Kostenlos";
					}
					echo '
					<div class="cart_item_wrapper">
						<div class="cart_item">
							<form action="./product.php">
								<button type="submit" name="id" value="'.$id.'">
									<div class="store_image">
										<img src="shop/product_img/'.$product_name[$id].'/Shop.jpg" class="primary">
										<div class="logo_wrapper">
											<div class="logo">
												<img src="shop/product_img/'.$product_name[$id].'/Logo.png" class="logo">
											</div>
										</div>
									</div>
									<div class="details_wrapper">
										<span class="details">
											<h1> '.$product_name[$id].' </h1>
											<p>	<dev> '.$product_developer[$id].' </dev>	</p>
										</span>
										<span class="price">
											<price> '.$price.' </price>
										</span>
									</div>
								</button>
							</form>
						</div>
						<div class="cart_remove">
							<form action="">
								<button type="submit" name="clear" value="'.$id.'">
									<img src="./resources/close.png">
								</button>
							</form>
						</div>
					</div>
					';
				}
			?>
		</div>

		<?php
			if(empty($wishlist)) {
				echo '
					<div class="cart_wrapper">
						<div class="empty">
							<p> Die Wunschliste ist leer </p>
						</div>
					</div>
				';
			}
		?>
	</body>
</html>
