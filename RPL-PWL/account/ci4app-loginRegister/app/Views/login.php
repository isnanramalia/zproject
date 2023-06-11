<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../../php/head2.php'); ?>

    <link rel="icon" href="../../atribut/logo/logo.png">
    <title>login - skinker</title>
</head>

<body style="margin-top: 50px; padding-top: 290px;">
    <header>
        <?php require_once('../../php/header3.php'); ?>
    </header>



    <!-- ----------------------------------------- FORM LOGIN ------------------------------------- -->
    <main style="padding-bottom: 150px; margin-bottom: 150px;">
        <section class="container">
            <h1 style="text-align: center;">LOG IN TO YOUR ACCOUNT</h1>
            <section class="row">
                <section class="col-3"></section>
                <section class="col-6">
                    <form action="">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <input type="password" id="password" name="password" placeholder="Your password" minlength="8" maxlength="15">
                        <input type="submit" value="SUBMIT">
                    </form>
                    <!-- link form add for sign in -->
                    <span style="color: rgba(43, 43, 43, 0.2); display: flex;justify-content: center;">Don't have an
                        account yet?</span>
                    <a href="register.php" class="href-login">CREATE ACCOUNT</a>
                </section>
                <section class="col-3"></section>
            </section>
        </section>
    </main>



    <!-- ------------------------------------------|FOOTER|------------------------------ -->
    <footer class=" text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php
        require_once('../../php/footer2.php');
        require_once('../../php/cartAmount2.php');
        ?>
    </footer>
</body>

</html>