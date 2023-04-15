<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>skinker</title>
</head>

<body style="padding-top: 15px; margin-top: 15px;">
    <?php
    require_once('php/header.php');
    ?>

    <!-- BAGIAN 1 -->
    <main id="main-1">
        <section class="grid-main-1">
            <section class="grid-item"></section>
            <section class="grid-item-large">
                <h1 style="color: #868D6E; font-size: 100px;">Skinker</h1>
                <h2 style="font-size: 60px;">Choose Your Skin</h2>
                <article style="font-size: 25px;">Every person has skin that deserves to be taken care of in order to
                    look beautiful for themselves and for all those who see them. Now it's your turn to choose the skin
                    that will be shaped using the best skincare from the world. Let's start by purchasing skincare from
                    SKINKER to get the best results.
                    <br><br>
                    CHOOSE YOUR SKIN NOW!
                </article><br><br>
                <center>
                    <a href="shop.php" type="button" class="btn btn-round-lg btn-lg" style="font-size: 25px; background-color: #3F4726; color: white; padding: 13px 100px 13px 100px;">SHOP
                        NOW</a>
                </center>
            </section>
            <section class="grid-item-large">
                <img src="atribut/lain/index.png" alt="identity" width="800px">
            </section>
            <section class="grid-item"></section>
        </section>
    </main>

    <!-- BAGIAN 2 POPULAR BRAND -->
    <main id="main-kedua" style="background-color: #888F70;">
        <h1 style="text-align: center;">Popular Brands</h1><br><br><br>
        <section style="margin: 20px ;">
            <section class="row">
                <section class="col"></section>
                <section class="col"><img class="popularBrand" src="atribut/brand/cosrx.png" alt="cosrx"></section>
                <section class="col"><img class="popularBrand" src="atribut/brand/dalba.png" alt="dalba"></section>
                <section class="col"><img class="popularBrand" src="atribut/brand/estee lauder.png" alt="estee lauder">
                </section>
                <section class="col"><img class="popularBrand" src="atribut/brand/kiehls.png" alt="kiehls"></section>
                <section class="col"><img class="popularBrand" src="atribut/brand/maraobadescu.png" alt="maraobadescu">
                </section>
                <section class="col"><img class="popularBrand" src="atribut/brand/the ordinary.png" alt="the ordianry">
                </section>
                <section class="col"></section>
            </section><br><br><br>
            <center>
                <a href="brand.php" type="button" class="btn btn-round" style="font-size: 25px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">See
                    All
                    Brand</a>
            </center>
        </section>
    </main>
    <!-- END BAGIAN 2 POPULAR BRAND -->

    <!-- BAGIAN 3 SHOP BY CATEGORY -->
    <main style="margin: 30px; padding: 30px;">
        <h1 style="text-align: center;">Shop By Category</h1><br><br><br>
        <section style="margin: 20px ;">
            <section class="row">
                <section class="col"></section>
                <section class="col">
                    <a href="shop.php#cleanser"><img class="popularBrand" src="atribut/category/cleanser.png" alt="cleanser"></a>
                    <p>Cleanser</p>
                </section>
                <section class="col">
                    <a href="shop.php#exfoliant"><img class="popularBrand" src="atribut/category/exfoliant.png" alt="exfoliant"></a>
                    <p>Exfoliant</p>
                </section>
                <section class="col">
                    <a href="shop.php#lipcare"><img class="popularBrand" src="atribut/category/lip care.png" alt="lip care"></a>
                    <p>Lip Care</p>
                </section>
                <section class="col"><a href="shop.php#mask"><img class="popularBrand" src="atribut/category/mask.png" alt="mask"></a>
                    <p>Mask</p>
                </section>
                <section class="col">
                    <a href="shop.php#moisturizer"><img class="popularBrand" src="atribut/category/moiturizer.png" alt="Moisturizer">
                    </a>
                    <p>Moisturizer</p>
                </section>
                <section class="col">
                    <a href="shop.php#serum"><img class="popularBrand" src="atribut/category/serum _ essence.png" alt="Serum & Essence">
                    </a>
                    <p>Serum</p>
                </section>
                <section class="col"></section>
            </section>
        </section>
    </main>
    <!-- END BAGIAN 3 SHOP BY CATEGORY-->

    <!-- BAGIAN 4 BEST SELLER -->
    <main style="background-color: #888F70; padding: 100px 300px 100px 300px;">
        <h1 style="text-align: center;">Best Seller</h1><br>
        <article style="font-size: 25px; text-align: center;">
            Welcome to our website that provides the best and most popular products from various categories. We are
            proud to offer products that have proven to be customer favorites, and we are confident that you will find
            something that meets your needs and preferences. From high-end skincare products to low-end, we ensure that
            all the products we offer are of high quality and meet industry standards.
        </article><br><br><br>
        <section class="card-deck d-flex justify-content-center">
            <?php
            require_once "dbconfig.php";
            $select_stmt = $db->prepare("SELECT * FROM product WHERE other_category = 'bestSeller'");
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
    </main>
    <!-- END BAGAIAN ALWAYS FOR YOU -->


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: #EFF0EC;">
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/cartAmount.php') ?>
    </footer>
</body>

</html>