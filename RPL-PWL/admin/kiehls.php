<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../php/head2.php'); ?>

    <link rel="icon" href="../atribut/logo/logo.png">
    <title>KIEHL'S - skinker</title>
</head>


<body style="background-color: #D4DDB7;">
    <header>
        <?php require_once('../php/header2.php'); ?>
    </header>

    <div class="alert-message"></div>
    <style>
        .alert-message {
            position: fixed;
            bottom: 20px;
            right: 20px;
            max-width: 300px;
            z-index: 9999;
            overflow-y: auto;
            max-height: 80vh;
        }
    </style>

    <!------------------------------KIEHL'S PRODUCTS-------------------------->
    <section class="col-10 py-5 mx-auto">
        <section>
            <img src="../atribut/brand/kiehls.png" alt="cosrx logo" style="height: 300px;display: block; margin: auto;">
        </section>
        <section style="background-color: white; font-size: medium; padding: 10px;margin: 10px;border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
            <h1 style="font-size: medium; text-align: center;">KIEHL'S</h1>
        </section>

        <!-- Start of Card Deck Layout -->
        <section class="card-deck d-flex justify-content-center">
            <?php
            require_once "../dbconfig.php";
            $select_stmt = $db->prepare("SELECT * FROM product WHERE brand_category = 'keihls'");
            $select_stmt->execute();
            include '../php/showProduct2.php'
            ?>
        </section>
    </section>



    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php
        require_once('../php/footer2.php');
        require_once('../php/cartAmount2.php');
        require_once('../php/addCart2.php');
        ?>
    </footer>
</body>