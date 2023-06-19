<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../php/head2.php'); ?>

    <link rel="icon" href="../atribut/logo/logo.png">
    <title>Sign In - Skinker</title>
</head>

<body style="margin-top: 50px; padding-top: 290px;">
    <header>
        <?php require_once('../php/header3.php'); ?>
    </header>

    <!-- ----------------------------------------- FORM SIGN IN ------------------------------------- -->
    <main style="margin: auto;padding-bottom: 150px; margin-bottom: 20px;">
        <section class="container">
            <h1 style="text-align: center;">CREATE ACCOUNT</h1>
            <section class="row">
                <section class="col-3"></section>
                <section class="col-6">
                    <form action="actionReg.php" method="POST">
                        <input type="text" id="first-name" name="first-name" placeholder="First name">
                        <input type="text" id="last-name" name="last-name" placeholder="Last name">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <input type="password" id="password" name="password" placeholder="Create password" minlength="8" maxlength="15">
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm password">
                        <input type="submit" value="SUBMIT">
                    </form>
                    <!-- link form add for sign in -->
                    <span style="color: rgba(43, 43, 43, 0.2); display: flex;justify-content: center;">Have an
                        account?</span>
                    <a href="login.php" class="href-login">
                        LOG IN</a>
                </section>
                <section class="col-3"></section>
            </section>
        </section>
    </main>

    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php
        require_once('../php/footer2.php');
        require_once('../php/cartAmount2.php');
        ?>
    </footer>
</body>

</html>