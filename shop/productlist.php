<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'shop');
			
    $products = $mysqli->query("SELECT * FROM products");
    $editions = $mysqli->query("SELECT * FROM editions");
    $prices = $mysqli->query("SELECT * FROM prices");

    $product_name = array();
    $product_editions = array();
    $product_price = array();
    $product_developer = array();
    $product_description = array();
            
    for($i = 0; $i < $products->num_rows; $i++) {
        $products->data_seek($i);
        $row_products = $products->fetch_assoc();
        $editions->data_seek($i);
        $row_editions = $editions->fetch_assoc();
        $prices->data_seek($i);
        $row_prices = $prices->fetch_assoc();

        array_push($product_name, $row_products['product_name']);
        array_push($product_developer, $row_products['product_developer']);
        array_push($product_description, $row_products['product_description']);
        array_push($product_editions, array($row_editions['edition_1'], $row_editions['edition_2'], $row_editions['edition_3'], $row_editions['edition_4']));
        array_push($product_price, array($row_prices['price_1'], $row_prices['price_2'], $row_prices['price_3'], $row_prices['price_4']));
    }
?>
