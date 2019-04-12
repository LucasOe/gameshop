<?php
	if ($pm == 'paypal') 			{
		echo '
			<active>
				<button type="submit" name="pm" value="paypal"> <img src="./resources/payment_methods/PayPal.png"> </button>
			</active>
		';
	} else {
		echo '
			<inactive>
				<button type="submit" name="pm" value="paypal"> <img src="./resources/payment_methods/PayPal.png"> </button>
			</inactive>
		';
	}

	if ($pm == 'mastercard') 	{
		echo '
			<active>
				<button type="submit" name="pm" value="mastercard"> <img src="./resources/payment_methods/MasterCard.png"> </button>
			</active>
		';
	} else {
		echo '
			<inactive>
				<button type="submit" name="pm" value="mastercard"> <img src="./resources/payment_methods/MasterCard.png"> </button>
			</inactive>
		';
	}

	if ($pm == 'visa') 				{
		echo '
			<active>
				<button type="submit" name="pm" value="visa"> <img src="./resources/payment_methods/Visa.png"> </button>
			</active>
		';
	} else {
		echo '
			<inactive>
				<button type="submit" name="pm" value="visa"> <img src="./resources/payment_methods/Visa.png"> </button>
			</inactive>
		';
	}
?>
