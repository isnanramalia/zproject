<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../php/head2.php'); ?>

    <link rel="icon" href="../atribut/logo/logo.png">
    <title>CETAPHIL - skinker</title>
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

    <!------------------------------CETAPHIL PRODUCTS-------------------------->
    <section class="card-deck d-flex justify-content-center">
        <?php
        require_once "../dbconfig.php";
        $select_stmt = $db->prepare("SELECT * FROM product WHERE brand_category = 'cetaphil'");
        $select_stmt->execute();
        include '../php/showProduct2.php'
        ?>
    </section>

    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;"><?php
                                                                                                                require_once('../php/footer2.php');
                                                                                                                require_once('../php/cartAmount2.php');
                                                                                                                require_once('../php/addCart2.php');
                                                                                                                ?></footer>
</body>