<!-- action untuk newsletter -->

<?php
session_start();
require_once "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// ambil nilai dari form
	$email = $_POST['email'];

	try {
		// buat statement SQL untuk insert data ke tabel contacts
		$stmt = $db->prepare("INSERT INTO subscribers ( email) VALUES (:email)");
		$stmt->bindParam(':email', $email);

		// eksekusi statement SQL
		$stmt->execute();

		// tampilkan pesan sukses
		echo "New subscriber added successfully";
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}
