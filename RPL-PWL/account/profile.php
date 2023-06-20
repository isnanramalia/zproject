<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'shopping-cart-db';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['user_id'])) {
        // Jika belum login, redirect ke halaman login
        header("Location: login.php");
        exit();
    }

    // Ambil data pengguna dari database
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['first_name'];
        $lastName = $row['last_name'];
        $email = $row['email'];
        $address = $row['address'];
    } else {
        echo "Data pengguna tidak ditemukan.";
    }

    // Cek apakah ada pengiriman form untuk update data pengguna
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Proses form dan update data pengguna ke database
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $sql = "UPDATE user SET first_name='$firstName', last_name='$lastName', address='$address' WHERE id='$userId'";
        if ($conn->query($sql) === TRUE) {
            // Redirect kembali ke halaman profile setelah berhasil update
            header("Location: profile.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../php/head2.php'); ?>

    <link rel="icon" href="../atribut/logo/logo.png">
    <title>Profile - Skinker</title>
</head>

<body style="margin-top: 50px; padding-top: 290px;">
    <header>
        <?php require_once('../php/header3.php'); ?>
    </header>

    <!-- ----------------------------------------- PROFILE FORM ------------------------------------- -->
    <main style="padding-bottom: 150px; margin-bottom: 150px;">
        <section class="container">
            <h1 style="text-align: center;">EDIT PROFILE</h1>
            <section class="row">
                <section class="col-3"></section>
                <section class="col-6">
                    <h2>Data Pengguna:</h2>
                    <p>First Name: <?php echo $firstName; ?></p>
                    <p>Last Name: <?php echo $lastName; ?></p>
                    <p>Email: <?php echo $email; ?></p>
                    <p>Address: <?php echo $address; ?></p>
                    <form action="" method="POST">
                        <input type="text" id="first-name" name="first-name" placeholder="First name" value="<?php echo $firstName; ?>">
                        <input type="text" id="last-name" name="last-name" placeholder="Last name" value="<?php echo $lastName; ?>">
                        <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                        <textarea id="address" name="address" placeholder="Address"><?php echo $address; ?></textarea>
                        <input type="submit" value="UPDATE">
                    </form>
                    <form action="logout.php" method="POST">
                        <input type="submit" name="logout" value="LOGOUT">
                    </form>
                </section>
                <section class="col-3"></section>
            </section>
        </section>
    </main>

    <!-- ------------------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php
        require_once('../php/footer2.php');
        require_once('../php/cartAmount2.php');
        ?>
    </footer>
</body>

</html>