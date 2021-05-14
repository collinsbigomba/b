
<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

$Mydatabase = "CREATE DATABASE IF NOT EXISTS phone_access";
mysqli_query($connect, $Mydatabase);

$useDB = "USE phone_access";
mysqli_query($connect, $useDB);

$users = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(50),
	regdate DATE
		)";
mysqli_query($connect, $users);

$product = "CREATE TABLE IF NOT EXISTS products (
		product_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (300) NOT NULL,
		product_type VARCHAR (25) NOT NULL,
		product_store VARCHAR (50) NOT NULL,
        product_price FLOAT,
		-- created datetime NOT NULL,
 		modified datetime NOT NULL,	
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $product);

$cart = "CREATE TABLE IF NOT EXISTS cart (
	cart_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $cart);

$wishlist = "CREATE TABLE IF NOT EXISTS wishlist (
	cart_id int(11) NOT NULL,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $wishlist);

$payments = "CREATE TABLE IF NOT EXISTS payments (
	pay_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	method int(11) NOT NULL,
	cname int(11) NOT NULL,
	cnum int(11) NOT NULL,
	expiration int(11) NOT NULL
	)";
mysqli_query($connect, $payments);


$product = "CREATE TABLE IF NOT EXISTS products (
		product_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (300) NOT NULL,
		product_type VARCHAR (25) NOT NULL,
		product_store VARCHAR (50) NOT NULL,
        product_price FLOAT,
		-- created datetime NOT NULL,
 		modified datetime NOT NULL,	
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $product);

$cart = "CREATE TABLE IF NOT EXISTS cart (
	cart_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $cart);

$wishlist = "CREATE TABLE IF NOT EXISTS wishlist (
	cart_id int(11) NOT NULL,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $wishlist);

$payments = "CREATE TABLE IF NOT EXISTS payments (
	pay_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	method int(11) NOT NULL,
	cname int(11) NOT NULL,
	cnum int(11) NOT NULL,
	expiration int(11) NOT NULL
	)";
mysqli_query($connect, $payments);

/*** Inserting product in the categories of Tvs  */

/*** Inserting product categories accessories   */
$accessories = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (1,'Samsung Galaxy Active2 Smartaccessorieses','accessories','PHONE-ACCESSORIES',140000,NOW(),'/PHONE-ACCESSORIES/images/a3.webp'),
	(2,'Sewer Valley tap','accessories','PHONE-ACCESSORIES',17000,NOW(),'/PHONE-ACCESSORIES/images/a4.webp'),
	(3,'Timex Easy Reader 156F','accessories','PHONE-ACCESSORIES',40000,NOW(),'/PHONE-ACCESSORIES/images/a5.webp'),
	(4,'Timex sReader accessories-Leather Strap','accessories','PHONE-ACCESSORIES',17000,NOW(),'/PHONE-ACCESSORIES/images/a6.webp'),
	(5,'Primary kepa 24-7 OClock','accessories','PHONE-ACCESSORIES',60000,NOW(),'/PHONE-ACCESSORIES/images/a7.webp'),
	(6,'Women Timex Easy','accessories','PHONE-ACCESSORIES',100000,NOW(),'/PHONE-ACCESSORIES/images/a8.webp'),
	(7,'Brown-Long Distance Pipe','accessories','PHONE-ACCESSORIES',40000,NOW(),'/PHONE-ACCESSORIES/images/e.webp'),
	(8,'Men Easy Field','accessories','PHONE-ACCESSORIES',100000,NOW(),'/PHONE-ACCESSORIES/images/e2.webp'),
	(9,'Casio Ana-Digital accessories','accessories','PHONE-ACCESSORIES',70000,NOW(),'/PHONE-ACCESSORIES/images/e3.webp')";
mysqli_query($connect, $accessories);

/*** Inserting product categories phone and Equipment  */
$phone = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (10,'Samsung Galaxy S10e 128GB ROM 6GB RAM','phone','PHONE-ACCESSORIES',700000,NOW(),'/PHONE-ACCESSORIES/images/a1.webp'),
	(11,'Samsung Galaxy A20s 32GB ROM 3GB Ram A207F/DS','phone','PHONE-ACCESSORIES',900000,NOW(),'/PHONE-ACCESSORIES/images/a2.webp'),
	(12,'Samsung Galaxy S9 Plus 64GB ROM 6GB RAM G965 GSM','phone','PHONE-ACCESSORIES',1750000,NOW(),'/PHONE-ACCESSORIES/images/m3.webp'),
	(13,'Simple Mobile Prepaid LG Journey (16GB)','phone','PHONE-ACCESSORIES',1900000,NOW(),'/PHONE-ACCESSORIES/images/m4.webp'),
	(14,'AT&T Prepaid Altcatel Insight Phone (16GB) - Black','phone','PHONE-ACCESSORIES',750000,NOW(),'/PHONE-ACCESSORIES/images/m5.webp'),
	(15,'New Android Smart Phone 360 Q','phone','PHONE-ACCESSORIES',2029000,NOW(),'/PHONE-ACCESSORIES/images/p.webp'),
	(16,'Tracfone Pre-Paid Apple iPhone 7 (32GB)','phone','PHONE-ACCESSORIES',750000,NOW(),'/PHONE-ACCESSORIES/images/po.webp'),
	(17,'Apple iPhone 11 Pro','phone','PHONE-ACCESSORIES',3900000,NOW(),'/PHONE-ACCESSORIES/images/pp.webp'),
	(18,'Apple iPhone 11','phone','PHONE-ACCESSORIES',2175000,NOW(),'/PHONE-ACCESSORIES/images/ry.webp')";
mysqli_query($connect, $phone);

	
/**===================
 The code below add product to cart
 * ================== */

if (isset($_POST['add'])) {
	//  print_r($_POST['product_id']);
	if (isset($_SESSION['cart'])) {

		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if (in_array($_POST['product_id'], $item_array_id)) {
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		} else {

			$count = count($_SESSION['cart']);
			$item_array = array(
				'product_qty' => $_POST['product_id'],
				'product_id' => $_POST['product_id']
			);


			$_SESSION['cart'][$count] = $item_array;
			header('location: cart.php');
		}
	} else {

		$item_array = array(
			'product_qty' => $_POST['product_id'],
			'product_id' => $_POST['product_id']
		);
		// Create new session variable
		$_SESSION['cart'][0] = $item_array;
		header('location: cart.php');
		// print_r($_SESSION['cart']);
	}
}


/*** MySQL other querries retreive products by category */

$querrypdts = "SELECT * FROM products";
$querryaccessories = "SELECT * FROM products WHERE product_type='accessories'";
$querryphone = "SELECT * FROM products WHERE product_type='phone'";


$result = $connect->query($querrypdts);
if ($result->num_rows > 0) {
} else {
}


/*** Insert payments to the db */

if (isset($_POST['checkout'])) {
	$procedure = mysqli_real_escape_string($connect, $_POST['paymentMethod']);
	$custom_name = mysqli_real_escape_string($connect, $_POST['card-name']);
	$custom_number = mysqli_real_escape_string($connect, $_POST['num']);
	if (empty($procedure)) {
		array_push($errors, "Method Required");
	}
	if (empty($custom_name)) {
		array_push($errors, "Card name Required");
	}

	if (count($errors) == 0) {
		$uid = $_SESSION['id'];
		$query = "INSERT INTO payments (userid, method, cname, cnum, expiration, cvv) 
					  VALUES('$uid', '$procedure', '$custom_name', '$custom_number', '15-04-2021', '001')";
		mysqli_query($connect, $query);

		header('location: place.php');
	}
}
