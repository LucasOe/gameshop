<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<title> Bestellen </title>
	</head>

	<body>
		<?php include "./nav.php"; ?>

		<div class="order_wrapper">
		<div class="order">
			<div class="pm">
				<form action="">
					<?php
						session_start();

						if(!isset($_SESSION['payment'])) {
							$_SESSION['payment'] = 'paypal'; //Standart Bezahl Typ
						}
						if(!isset($pm)) {
							$pm = 'paypal'; //Standart Bezahl Typ
						}

						if(isset($_GET["pm"])) {
							$pm = $_GET["pm"];
							$_SESSION['payment'] = $pm;
						}

						include "./pm/payment_methods.php";
					?>
				</form>
			</div>

			<form action="./checkout">
				<div class="payment_wrapper">
					<div class="payment">
						<?php
							if($_SESSION['payment'] == 'paypal') 		{ include "./pm/paypal.php"; }
							if($_SESSION['payment'] == 'mastercard') 	{ include "./pm/mastercard.php"; }
							if($_SESSION['payment'] == 'visa') 			{ include "./pm/visa.php"; }
						?>
					</div>
				</div>
				<div class="cart_buttons">
					<form action="./bestellen.php">
						<button>
							<p> Bestellen </p>
						</button>
					</form>
				</div>
			</form>
		</div>
		</div>

	</body>
</html>
