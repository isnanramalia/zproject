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
        <section class="row row-cols-1 row-cols-md-4 g-4">
            <section class="col">
                <section class="card h-100">
                    <img src="atribut/best seller/cetaphil.png" class="card-img-top" alt="moiturizer cetaphil">
                    <section class="card-body">
                        <h4 class="card-title text-center">Intensive Moisturizer - Cetaphil </h4>
                        <h5 class="card-title text-center">IDR 210.000 </h5>
                        <center>
                            <a href="admin/cetaphil.html" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="atribut/best seller/kiehls.png" class="card-img-top" alt="kiehls product">
                    <section class="card-body">
                        <h4 class="card-title text-center">Eye Cream - Keihl`s </h4>
                        <h5 class="card-title text-center">IDR 300.000 </h5>
                        <center>
                            <a href="admin/kiehls.html" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="atribut/best seller/skitific.png" class="card-img-top" alt="sun screen skintific">
                    <section class="card-body">
                        <h4 class="card-title text-center">Serum Sun Screen - Skintific </h4>
                        <h5 class="card-title text-center">IDR 120.000 </h5>
                        <center>
                            <a href="admin/skintific.html" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="atribut/best seller/the ordianry.png" class="card-img-top" alt="the ordianry">
                    <section class="card-body">
                        <h4 class="card-title text-center">Serum - The Ordinary</h4>
                        <h5 class="card-title text-center">IDR 200.000</h5>
                        <center>
                            <a href="admin/theOrdinary.html" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <!-- END BAGAIAN 4 BEST SELLER -->

    <!-- BAGIAN 5 ALWAYS FOR YOU -->
    <main style="background-color: white; padding-top: 50px; padding-bottom: 50px;">
        <section class="container text-center">
            <section class="row">
                <section class="col">
                    <h1><span style="color: #868D6E;">Skinker</span> is Always For You</h1><br><br>
                </section>
            </section>
            <section class="row">
                <section class="col">
                </section>
                <section class="col">
                    <img class="cap" src="atribut/cap/crueltyfree.png" alt="crueltyfree">
                </section>
                <section class="col">
                    <img class="cap" src="atribut/cap/sustainable.png" alt="sustainable">
                </section>
                <section class="col">
                    <img class="cap" src="atribut/cap/chemicalfree.png" alt="chemicalfree">
                </section>
                <section class="col">
                    <img class="cap" src="atribut/cap/womanowned.png" alt="womanowned">
                </section>
                <section class="col">
                </section>
            </section>
        </section>
    </main>
    <!-- END BAGAIAN ALWAYS FOR YOU -->


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: #EFF0EC;">
        <!-- Grid container -->
        <section class="container p-3">
            <!--Grid row-->
            <section class="row">
                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <h5 class="text-uppercase mb-4">OUR WORLD</h5>

                    <ul class="list-unstyled mb-4">
                        <li>
                            <a href="shop.php" class="text-black">Shoping now</a>
                        </li>
                        <li>
                            <a href="offers.php" class="text-black">Offers for you</a>
                        </li>
                        <li>
                            <a href="faq.php" class="text-black">More about me</a>
                        </li>
                        <li>
                            <a href="brand.php" class="text-black">Brands collaborations</a>
                        </li>
                    </ul>
                </section>
                <!--Grid column-->

                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <h5 class="text-uppercase mb-4">LINK IN</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="faq.php#contactUs" class="text-black">Contact us</a>
                        </li>
                        <li>
                            <a href="shop.php" class="text-black">Skincare base on category</a>
                        </li>
                        <li>
                            <a href="brand.php" class="text-black">Skincare base on brand</a>
                        </li>
                        <li>
                            <a href="account/login.html" class="text-black">Login</a>
                        </li>
                        <li>
                            <a href="account/register.html" class="text-black">Sign In</a>
                        </li>
                    </ul>
                </section>
                <!--Grid column-->

                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <h5 class="text-uppercase mb-4">Sign up to our newsletter</h5>

                    <section class="form-outline form-black mb-4">
                        <section style="display: flex;">
                            <input type="email" id="form5Example2" class="form-control" placeholder="Enter your email" />
                            <button class="btn btn-dark" type="button">Submit</button>
                        </section>
                    </section>

                </section>
                <!--Grid column-->
            </section>
            <!--Grid row-->
        </section>
        <!-- Grid container -->

        <!-- payment -->
        <section class="container text-center">
            <section class="row">
                <section class="col">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/bca.png" alt="bca">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/mandiri.png" alt="manidiri">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/dana.png" alt="dana">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/gopay.png" alt="gopay">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/ovo.png" alt="ovo">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/shopeepay.png" alt="shopeepay">
                </section>
                <section class="col">
                </section>
            </section>
        </section>
        <!-- end payment -->


        <!-- Copyright -->
        <section class="text-center p-3 border-top border-white">
            © 2022-2023 Copyright Skinker
        </section>
        <!-- Copyright -->
    </footer>
</body>

</html>