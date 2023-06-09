<?php
session_start();
require_once "../dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// ambil nilai dari form
	$first_name = $_POST["first-name"];
	$last_name = $_POST["last-name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Enkripsi password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	try {
		// buat statement SQL untuk insert data ke tabel contacts
		$stmt = $db->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
		$stmt->bindParam(':first_name', $first_name);
		$stmt->bindParam(':last_name', $last_name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $hashed_password);

		// eksekusi statement SQL
		$stmt->execute();

		// tampilkan pesan sukses
		echo "Data berhasil disimpan.";
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}
