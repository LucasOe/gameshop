<?php
  include 'shop/productlist.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="./style/stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<title> Shop </title>
	</head>

	<body>
		<?php include "./nav.php"; ?>

		<div class="search_bar">
			<form action="" autocomplete=off>
				<button type="submit">
					<img src="./resources/search_icon.png">
				</button>
				<input type="text" name="search" placeholder="Im Shop suchen">
			</form>
		</div>
		
		<div class="shop">
			<?php
				for($row = 0; $row < sizeof($product_name); $row++) {
					if($product_price[$row][0] > 0) {
						$price = $product_price[$row][0] . "€";
					} elseif($product_price[$row][0] == 0) {
						$price = "Kostenlos";
					}

					//Search for term
					if(isset($_GET["search"]) && $_GET["search"] != "") {
						$search_filter = $_GET["search"];
					} else {
						goto search;
					}
					if(stripos($product_name[$row], $search_filter) !== false) {
						search:
						echo '
							<div class="shop_item">
								<form action="./product.php">
									<button type="submit" name="id" value="'.$row.'">
										<div class="store_image">
											<img src="shop/product_img/'.$product_name[$row].'/Shop.jpg" class="primary">
											<div class="logo_wrapper">
												<div class="logo">
													<img src="shop/product_img/'.$product_name[$row].'/Logo.png" class="logo">
												</div>
											</div>
										</div>
										<div class="details_wrapper">
											<span class="details">
												<h1> '.$product_name[$row].' </h1>
												<p>	<dev> '.$product_developer[$row].' </dev>	</p>
											</span>
											<span class="price">
												<price> '.$price.' </price>
											</span>
										</div>
									</button>
								</form>
							</div>
						';
					}
				}
			?>
		</div>

		<?php include "./footer.php"; ?>
	</body>
</html>
