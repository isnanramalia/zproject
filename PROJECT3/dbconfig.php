<?php
// koneksi ke database
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "shopping_cart_db";

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $status = $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo "Koneksi ke database berhasil! Status: $status";
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: " . $e->getMessage();
}
