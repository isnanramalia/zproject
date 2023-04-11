<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>offers - skinker</title>
</head>

<body style="margin-top: 90px; padding-top: 80px;">
    <?php
    require_once('php/header.php');
    ?>


    <!-- -------------------------------------CONTAINER 1 (shop & saves)-------------------------------------------- -->
    <main class="container">
        <section class="row">
            <img src="atribut/offers/main offer banner.svg" alt="offers banner">
            <section class="col" style="margin-top: 30px; padding-top: 30px;">
                <hr style="border: 1px solid black;">
            </section>
        </section>
        <!-- <section class="row">
            <section>
                <h1 style="font-size: 60px;">SHOP AND SAVE WITH OFFERS</h1>
                <article style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam,
                    repudiandae provident fugiat
                    beatasequi adipisci, maiores accusantium molestias dignissimos suscipit debitis. Quis quaerat a
                    quuntur accusantium molestiae. Vel, consectetur tenetur.</article>
            </section>
        </section> -->
    </main>


    <!-- -------------------------------------CONTAINER 2 (all offers)-------------------------------------------- -->
    <main class="container">
        <section class="row row-offers">
            <section class="col-1"></section>
            <section class="col-4">
                <img src="atribut/offers/1.jpg" alt="">
            </section>
            <section class="col-6">
                <h1>GET THE 5 SIGNS OF RESILIENT SKIN FROM <span style="color: #CCC1B7;">THE BODY SHOP</span></h1>
                <p>Kembalikan kekuatan kulitmu dengan rangkaian Edelweiss</p>
                <button class="btn btn-block" onclick="location.href='admin/theBodyshop.php'">Take
                    It</button>
            </section>
            <section class="col-1"></section>
        </section>
        <hr class="hr-offers">
        <section class="row row-offers">
            <section class="col-1"></section>
            <section class="col-4">
                <img src="atribut/offers/2.jpg" alt="">
            </section>
            <section class="col-6">
                <h1>START ANEW WITH EDELWEISS SKINCARE </h1>
                <p>Dengan Edelweiss Bundle yang bikin kamu lebih hemat! </p>
                <button class="btn btn-block" onclick="location.href='shop.php'">Take It</button>
            </section>
            <section class="col-1"></section>
        </section>
        <hr class="hr-offers">
        <section class="row row-offers">
            <section class="col-1"></section>
            <section class="col-4">
                <img src="atribut/offers/3.jpg" alt="">
            </section>
            <section class="col-6">
                <h1>SPECIAL OFFERS JUST FOR YOU! JUST FOR <span style="color: #79A3DD;">INNISFREE</span></h1>
                <p>Dapatkan potongan harga Rp50.000 untuk setiap pembelanjaan produk The Body Shop® dengan transaksi
                    menggunakan kartu BSI*. Periode:1 Desember 2022 – 28 Februari 2023.</p>
                <button class="btn btn-block" onclick="location.href='admin/innisfree.html'">Take It</button>
            </section>
            <section class="col-1"></section>
        </section>
        <hr class="hr-offers">
        <section class="row row-offers">
            <section class="col-1"></section>
            <section class="col-4">
                <img src="atribut/offers/4.jpg" alt="">
            </section>
            <section class="col-6">
                <h1><span style="color: #848E1C;">YVES ROCHER</span> OFFERS THIS WEEK</h1>
                <p>Promo Bundle Skincare terbaik untuk minggu ini</p>
                <button class="btn btn-block" onclick="location.href='/admin/yvesrocher.html'">Take It</button>
            </section>
            <section class="col-1"></section>
        </section>
        <hr class="hr-offers">
    </main>



    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
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
            © 2022 Copyright Skinker
        </section>
        <!-- Copyright -->
    </footer>
</body>

</html>