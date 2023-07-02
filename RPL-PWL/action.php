<?php
session_start();
require_once "dbconfig.php";

// --------------- NAMBAH PRODUK KE CART ---------------
// $id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (isset($_POST["pid"]) && isset($_POST["pname"]) && isset($_POST["pprice"]) && isset($_POST["pimage"]) && isset($_POST["pcode"]) && isset($_POST["pcode"])) { // && isset($_POST["puser_id"]
	$id		= $_POST["pid"];
	$name 	= $_POST["pname"];
	$price 	= $_POST["pprice"];
	$image 	= $_POST["pimage"];
	$code 	= $_POST["pcode"];
	$qty = 1;

	$select_stmt = $db->prepare("SELECT product_code FROM cart WHERE product_code=:code");
	$select_stmt->execute(array(":code" => $code));
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

	$check_code = isset($row["product_code"]) ? $row["product_code"] : false;

	if (!$check_code) {
		$insert_stmt = $db->prepare("INSERT INTO cart(product_name,
													product_price,
													product_image, 
													quantity,
													total_price,
													product_code)
													-- user_id) 
												VALUES
													(:name,
													:price,
													:image,
													:qty,
													:ttl_price,
													:code)");
		// -- :user_id
		$insert_stmt->bindParam(":name", $name);
		$insert_stmt->bindParam(":price", $price);
		$insert_stmt->bindParam(":image", $image);
		$insert_stmt->bindParam(":qty", $qty);
		$insert_stmt->bindParam(":ttl_price", $price);
		$insert_stmt->bindParam(":code", $code);
		// $insert_stmt->bindParam(':user_id', $id);
		$insert_stmt->execute();

		echo '<div class="alert alert-success alert-dismissible mt-2">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Item added to your cart🛒</strong> 
			  </div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible mt-2">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Item already added to your cart😉! </strong>
				<br>check your cart to add item 
			  </div>';
	}
}

// --------------- MENGURANGI STOCK DI TB PRODUK SETELAH PRODUK DI CHECKOUT ---------------
// -------------ini masih masalah, soalnya yg kekurang stoknya cm data nmr 1 tok
if (isset($_POST["action"]) && $_POST["action"] == "orders") {
	// Kode untuk mengurangi stok produk

	// Mendapatkan daftar produk yang dibeli dari string $products
	$product = isset($_POST["products"]) ? $_POST["products"] : '';
	$productList = explode(", ", $product);

	// Mengurangi stok setiap produk yang dibeli
	foreach ($productList as $product) {
		$productInfo = explode("(", $product);
		if (isset($productInfo[1])) {
			$productName = trim($productInfo[1]);
			$productQuantity = intval(filter_var($productInfo[1], FILTER_SANITIZE_NUMBER_INT));
		} else {
			$productName = '';
			$productQuantity = 0;
		}

		// Mengupdate stok di tabel product
		$updateStockStmt = $db->prepare("UPDATE product SET product_stock = product_stock - :quantity WHERE product_name = :name");
		$updateStockStmt->bindParam(":quantity", $productQuantity);
		$updateStockStmt->bindParam(":name", $productName);
		$updateStockStmt->execute();
	}

	// Setelah berhasil melakukan pemesanan, hapus semua item di keranjang
	$deleteCartStmt = $db->prepare("DELETE FROM cart");
	$deleteCartStmt->execute();

	// Set session alert dan message untuk menampilkan pesan sukses di halaman cart.php
	$_SESSION["showAlert"] = "block";
	$_SESSION["message"] = "Order has been placed successfully!";
	header("Location: cart.php");
	exit();
}

// --------------- MENGHITUNG BRP YG ADA DI CART ---------------
if (isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart_item") {
	$select_stmt = $db->prepare("SELECT * FROM cart");
	$select_stmt->execute();
	$row = $select_stmt->rowCount();
	echo $row;
}

// --------------- HAPUS PRODUK DI CART ---------------
if (isset($_GET["remove"])) {
	$id = $_GET["remove"];
	$delete_stmt = $db->prepare("DELETE FROM cart WHERE cart_id =:cid");
	$delete_stmt->execute(array(":cid" => $id));

	$_SESSION["showAlert"] = "block";
	$_SESSION["message"] = "Item removed from the cart";
	header("location:cart.php");
}

// --------------- HAPUS SEMUA PRODUK DI CART ---------------
if (isset($_GET["clear"])) {
	$id = $_GET["clear"];
	$delete_stmt = $db->prepare("DELETE FROM cart");
	$delete_stmt->execute();

	$_SESSION["showAlert"] = "block";
	$_SESSION["message"] = "All item removed from the cart";
	header("location:cart.php");
}

// --------------- UPDATE TABEL CART (jika nambah produk ke cart) ---------------
if (isset($_POST["pqty"])) {
	$qty	= $_POST["pqty"];
	$id		= $_POST["pid"];
	$price	= $_POST["pprice"];

	$total_price = $qty * $price;

	$update_stmt = $db->prepare("UPDATE cart SET quantity=:qty, total_price=:ttl_price WHERE cart_id=:cid");
	$update_stmt->execute(array(
		":qty" => $qty,
		":ttl_price" => $total_price,
		":cid" => $id
	));
}

// --------------- INSERT DATA CHECKOUT KE TABEL ORDERS ---------------
if (isset($_POST["action"]) && isset($_POST["action"]) == "orders") {
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$province = $_POST['province'];
	$city = $_POST['city'];
	$ongkir = $_POST['shipping_cost'];
	$pmode = $_POST["pmode"];
	$products = $_POST["products"];
	$grand_total = $_POST["grand_total"];

	$data = "";

	$ppn_percentage = 0.1;
	$ongkir = 16000;
	// Tambahkan parameter total amount payable
	$total_amount_payable = $grand_total + ($grand_total * $ppn_percentage) + $ongkir;

	$insert_stmt = $db->prepare("INSERT INTO orders(username,
                                              phone, 
                                              address,
                                              province,
                                              city,
                                              ongkir,
                                              payment_mode,
                                              products,
                                              paid_amount)
                            VALUES
                                              (:uname,
                                              :phone,
                                              :address,
                                              :province, 
                                              :city,
                                              :shipping_cost,
                                              :pmode,
                                              :products,
                                              :pamount)");
	$insert_stmt->bindParam(":uname", $name);
	$insert_stmt->bindParam(":phone", $phone);
	$insert_stmt->bindParam(":address", $address);
	$insert_stmt->bindParam(':province', $province);
	$insert_stmt->bindParam(':city', $city);
	$insert_stmt->bindParam(':shipping_cost', $ongkir);
	$insert_stmt->bindParam(":pmode", $pmode);
	$insert_stmt->bindParam(":products", $products);
	$insert_stmt->bindParam(":pamount", $total_amount_payable);
	$insert_stmt->execute();


	$delete_cart_stmt = $db->prepare("DELETE FROM cart");
	$delete_cart_stmt->execute();

	// Menggantikan $city dan $province dengan kode kota dan provinsi yang diperoleh dari RajaOngkir
	$cityCode = $_POST['city'];
	$provinceCode = $_POST['province'];

	// Fungsi untuk mengambil detail kota dari kode kota
	function getCityName($cityCode)
	{
		// Lakukan permintaan API ke RajaOngkir untuk mendapatkan detail kota berdasarkan kode
		$apiUrl = "https://api.rajaongkir.com/starter/city?id=" . $cityCode;
		$apiKey = "aa2dc37907d6b7692e797459a79db68d"; // Ganti dengan kunci API RajaOngkir Anda
		$response = file_get_contents($apiUrl . "&key=" . $apiKey);

		// Proses data JSON yang diterima
		$data = json_decode($response, true);
		if ($data['rajaongkir']['status']['code'] == 200) {
			// Ambil nama kota dari data yang diterima
			return $data['rajaongkir']['results']['city_name'];
		}
		return null;
	}

	// Fungsi untuk mengambil detail provinsi dari kode provinsi
	function getProvinceName($provinceCode)
	{
		// Lakukan permintaan API ke RajaOngkir untuk mendapatkan detail provinsi berdasarkan kode
		$apiUrl = "https://api.rajaongkir.com/starter/province?id=" . $provinceCode;
		$apiKey = "aa2dc37907d6b7692e797459a79db68d"; // Ganti dengan kunci API RajaOngkir Anda
		$response = file_get_contents($apiUrl . "&key=" . $apiKey);

		// Proses data JSON yang diterima
		$data = json_decode($response, true);
		if ($data['rajaongkir']['status']['code'] == 200) {
			// Ambil nama provinsi dari data yang diterima
			return $data['rajaongkir']['results']['province'];
		}
		return null;
	}

	// Panggil fungsi-fungsi tersebut untuk mendapatkan nama kota dan provinsi
	$cityName = getCityName($cityCode);
	$provinceName = getProvinceName($provinceCode);

	if ($pmode == "bca") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following bank account!</h6>
			<h4>Bank: BCA</h4>
			<h4>Account Number: 8715546414 </h4>
			<h4>Account Holder: Your Name</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "bni") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following bank account!</h6>
			<h4>Bank: BNI</h4>
			<h4>Account Number: 0831237060</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "linebank") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following bank account!</h6>
			<h4>Bank: LINE BANK</h4>
			<h4>Account Number: 11715702490</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "dana") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following e-wallet account!</h6>
			<h4>Bank: DANA</h4>
			<h4>Account Number: 083109191936</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "ovo") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following e-wallet account!</h6>
			<h4>Bank: OVO</h4>
			<h4>Account Number: 083109191936</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "gopay") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following e-wallet account!</h6>
			<h4>Bank: GOPAY</h4>
			<h4>Account Number: 083109191936</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else if ($pmode == "shopeepay") {
		$data .= '<h1 class="display-4 mt-2 text-danger text-center">Payment Instructions</h1>
			<br>
			<div class="jumbotron p-3 mb-2 text-center">
			<h2>Payment Amount: IDR ' . number_format($total_amount_payable, 2) . '</h2>
			<h6>Please make the payment to the following e-wallet account!</h6>
			<h4>Bank: SHOPEEPAY</h4>
			<h4>Account Number: 083109191936</h4>
			<h4>Account Holder: SKINKER</h4>
			</div>
			<br>
			<p text-center>After making the payment, please click the button below to confirm your payment.</p>
			<button class="btn btn-block btn-light" onclick="confirmPayment(this)">Confirm Payment</button>';
	} else {
		$data .= '<div class="text-center">
			<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
			<h2>Your Order Placed Successfully!</h2>
			<h4 class="bg-danger text-light rounded p-2">Items Purchased : <br><br>' . $products . '</h4>
			<h4>Your Name : ' . $name . ' </h4>			
			<h4>Your Phone : ' . $phone . '  </h4>
			<h4>Shipping Address: ' . $address . ', ' . $cityName . ', ' . $provinceName . ' </h4>
			<h4>Payment Mode : ' . $pmode . ' </h4>			
			<h4 id="total-amount-paid">Total Amount Paid: IDR ' . number_format($total_amount_payable, 2) . '</h4>
			<br>
			<br>
			<a href="index.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
		</div>';
	}

	// ini utk setelah konfirmasi pembayaran (selain COD)
	$data2 = '';
	$data2 .= '<div class="text-center">
			<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
			<h2>Your Order Placed Successfully!</h2>
			<h4 class="bg-danger text-light rounded p-2">Items Purchased : <br><br>' . $products . '</h4>
			<h4>Your Name : ' . $name . ' </h4>			
			<h4>Your Phone : ' . $phone . '  </h4>
			<h4>Shipping Address: ' . $address . ', ' . $cityName . ', ' . $provinceName . ' </h4>
			<h4>Payment Mode : ' . $pmode . ' </h4>			
			<h4 id="total-amount-paid">Total Amount Paid: IDR ' . number_format($total_amount_payable, 2) . '</h4>
			<br>
			<br>
			<a href="index.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
		</div>';

	echo '<script>
	function confirmPayment(button) {
		// ! Display $data2
		button.parentNode.innerHTML = `' . addslashes($data2) . '`;
	}
	</script>';

	echo $data;
}
