<!-- ation untuk FAQ -->
<?php
session_start();
require_once "dbconfig.php";

// form faq.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// ambil nilai dari form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];

	try {
		// buat statement SQL untuk insert data ke tabel contacts
		$stmt = $db->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':message', $message);

		// eksekusi statement SQL
		$stmt->execute();

		// tampilkan pesan sukses
		echo "Data berhasil disimpan.";
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}
