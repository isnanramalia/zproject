<?php
// koneksi ke database
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "shopping-cart-db";

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $status = $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: " . $e->getMessage();
}
