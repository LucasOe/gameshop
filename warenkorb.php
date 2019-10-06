<?php
	include 'shop/productlist.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="./style/stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<title> Warenkorb </title>
	</head>

	<body>
		<?php include "./nav.php"; ?>

		<?php
			session_start();

			//Erstellt ein neues Array falls keins existiert
			if(!isset($_SESSION['cart']) || !isset($_SESSION['cart_edition'])) {
				$_SESSION['cart'] = array();
				$_SESSION['cart_edition'] = array();
			}

			//Fügt Produkt und Edition zur Wunschliste hinzu, falls id und edition als Query String übergeben wird
			if(isset($_GET["id"]) && isset($_GET["edition"])) {
				$id = $_GET["id"];
				$edition = $_GET["edition"];
				//Überprüft ob das Produkt bereits in der Wunschliste vorhanden ist
				if(!in_array($id, $_SESSION['cart'])) {
					array_push($_SESSION['cart'],$id);
					$_SESSION['cart_edition'][$id] = $edition;
				}
			}

			//Entfernt das Produkt von der Wunschliste, falls clear als Query String übergeben wird
			if(isset($_GET["clear"])) {
				$clear = $_GET["clear"];
				$key = array_search($clear, $_SESSION['cart']);
				unset($_SESSION['cart'][$key]);
				unset($_SESSION['cart_edition'][$clear]);
			}
		?>

		<div class="cart">
			<?php
				$cart = $_SESSION['cart'];
				$edition = $_SESSION['cart_edition'];
				//Fügt Euro zeichen hinterm Preis hinzu. Falls der Preis 0 beträgt, wird er zu "Kostenlost" geändert.
				foreach($cart as $id) {
					if($product_price[$id][$edition[$id]] > 0) {
						$price = $product_price[$id][$edition[$id]] . "€";
					} elseif($product_price[$id][$edition[$id]] == 0) {
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
												<h1> '.$product_editions[$id][$edition[$id]].' </h1>
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
			if(empty($_SESSION['cart'])) {
				echo '
					<div class="cart_wrapper">
						<div class="empty">
							<p> Der Warenkorb ist leer </p>
						</div>
					</div>
				';
			} else {
				echo '
					<div class="cart_buttons">
						<form action="./bestellen.php">
							<button>
								<p> Bestellen </p>
							</button>
						</form>
					</div>
				';
			}
		?>
	</body>
</html>