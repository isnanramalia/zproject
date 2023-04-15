<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../php/head2.php'); ?>

    <link rel="icon" href="../atribut/logo/logo.png">
    <title>SKINTIFIC - skinker</title>
</head>


<body style="background-color: #D4DDB7;">
    <header>
        <?php require_once('../php/header2.php'); ?>
    </header>

    <!------------------------------SKINTIFIC PRODUCTS-------------------------->
    <section class="col-10 py-5 mx-auto">
        <section>
            <img src="../atribut/brand/skintific.png" alt="cosrx logo" style="height: 300px;display: block; margin: auto;">
        </section>
        <section style="background-color: white; font-size: medium; padding: 10px;margin: 10px;border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
            <h1 style="font-size: medium; text-align: center;">SKINTIFIC</h1>
        </section>

        <!-- Start of Card Deck Layout -->
        <section class="card-deck d-flex justify-content-center">
            <?php
            require_once "../dbconfig.php";
            $select_stmt = $db->prepare("SELECT * FROM product WHERE brand_category = 'skintific'");
            $select_stmt->execute();
            while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image'];
                $product_code = $row['product_code'];
            ?>
                <section class="card col-lg-4 col-md-6 mb-4">
                    <form class="form-submit">
                        <input type="hidden" class="pid" value="<?php echo $product_id ?>">
                        <input type="hidden" class="pname" value="<?php echo $product_name ?>">
                        <input type="hidden" class="pprice" value="<?php echo $product_price ?>">
                        <input type="hidden" class="pimage" value="<?php echo $product_image ?>">
                        <input type="hidden" class="pcode" value="<?php echo $product_code ?>">
                        <div class="card-body">
                            <img class="card-img-top" src="<?php echo $product_image ?>" alt="<?php echo $product_name ?>">
                            <h2 class="card-title"><?php echo $product_name ?></h2>
                            <p class="card-text price">IDR <?php echo number_format($product_price, 2) ?></p>
                            <button id="addItem" class="btn btn-block">Add to Cart</button>
                        </div>
                    </form>
                </section>
            <?php
            }
            ?>
        </section>
    </section>



    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('../php/footer2.php') ?>
        <?php require_once('../php/cartAmount.php') ?>
    </footer>
</body>