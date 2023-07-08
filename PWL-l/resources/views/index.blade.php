<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="skincare">
    <meta name="description" content="beli skincare">
    <meta name="robots" content="index, follow">
    <meta name="author" content="isna nur amalia">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- link css -->

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- link js -->
    <script src="js/script.js"></script>

    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h355rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript (dr onlyxcodes.com)-->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- link google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="icon" href="atribut/logo/logo.png">
    <title>skinker</title>
</head>

<body style="padding-top: 15px; margin-top: 15px;">
    <header>
        <a href="index" class="logo" <?php if (basename($_SERVER['PHP_SELF']) == 'index') {
                                            echo ' class="active"';
                                        } ?>><span>SKINKER</span></a>
        <nav>
            <ul class="navbar">
                <li><a href="shop" <?php if (basename($_SERVER['PHP_SELF']) == 'shop') {
                                        echo ' class="active"';
                                    } ?>>SHOP</a></li>
                <li><a href="brand" <?php if (basename($_SERVER['PHP_SELF']) == 'brand') {
                                        echo ' class="active"';
                                    } ?>>BRANDS</a></li>
                <li><a href="offers" <?php if (basename($_SERVER['PHP_SELF']) == 'offers') {
                                            echo ' class="active"';
                                        } ?>>OFFERS</a></li>
                <li><a href="faq" <?php if (basename($_SERVER['PHP_SELF']) == 'faq') {
                                        echo ' class="active"';
                                    } ?>>F.A.Q.</a></li>
                <li><a href="tipsNadvice" <?php if (basename($_SERVER['PHP_SELF']) == 'tipsNadvice') {
                                                echo ' class="active"';
                                            } ?>>TIPS & ADVICE</a></li>
            </ul>
        </nav>
        <section class="main">
            <a href="#" <?php if (basename($_SERVER['PHP_SELF']) == '#') {
                            echo ' class="active"';
                        } ?>><i class="bi bi-search"></i></a>
            <a href="#" <?php if (basename($_SERVER['PHP_SELF']) == '#') {
                            echo ' class="active"';
                        } ?>><b>|</b></a>
            <?php
            $active_pages = ['account/login', 'account/register'];
            $current_page = basename($_SERVER['PHP_SELF']);

            echo '<a href="account/login"';
            if (in_array($current_page, $active_pages)) {
                echo ' class="active"';
            }
            echo '>ACCOUNT <i class="ri-user-fill"></i></a>';
            ?>
            <a href="cart" <?php if (basename($_SERVER['PHP_SELF']) == 'cart') {
                                echo ' class="active"';
                            } ?>>CART <i class="bi bi-bag"></i>&nbsp&nbsp<span id="cart-item"></span></a>
            <?php

            if (isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart_item") {
                $select_stmt = $db->prepare("SELECT * FROM cart");
                $select_stmt->execute();
                $row = $select_stmt->rowCount();
                echo $row;
            }

            ?></a>
            <section class="bx bx-menu" id="menu-icon"></section>
        </section>
    </header>

    <!-- utk menampilkan pop-up alert -->
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
                    <a href="shop" type="button" class="btn btn-round-lg btn-lg" style="font-size: 25px; background-color: #3F4726; color: white; padding: 13px 100px 13px 100px;">SHOP
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
                <a href="brand" type="button" class="btn btn-round" style="font-size: 25px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">See
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
                    <a href="shop#cleanser"><img class="popularBrand" src="atribut/category/cleanser.png" alt="cleanser"></a>
                    <p>Cleanser</p>
                </section>
                <section class="col">
                    <a href="shop#exfoliant"><img class="popularBrand" src="atribut/category/exfoliant.png" alt="exfoliant"></a>
                    <p>Exfoliant</p>
                </section>
                <section class="col">
                    <a href="shop#lipcare"><img class="popularBrand" src="atribut/category/lip care.png" alt="lip care"></a>
                    <p>Lip Care</p>
                </section>
                <section class="col"><a href="shop#mask"><img class="popularBrand" src="atribut/category/mask.png" alt="mask"></a>
                    <p>Mask</p>
                </section>
                <section class="col">
                    <a href="shop#moisturizer"><img class="popularBrand" src="atribut/category/moiturizer.png" alt="Moisturizer">
                    </a>
                    <p>Moisturizer</p>
                </section>
                <section class="col">
                    <a href="shop#serum"><img class="popularBrand" src="atribut/category/serum _ essence.png" alt="Serum & Essence">
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
            <section class="col">
                <section class="card h-100">
                    <img src="admin/imgProduct/innisfree/eye treatment/eye.jpg" class="card-img-top" alt="moiturizer cetaphil">
                    <section class="card-body">
                        <h4 class="card-title text-center">Intensive Moisturizer - Cetaphil </h4>
                        <h5 class="card-title text-center">IDR 210.000 </h5>
                        <center>
                            <a href="admin/cetaphil" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="admin/imgProduct/cetaphil/moisturizer/moisturizer2.png" class="card-img-top" alt="kiehls product">
                    <section class="card-body">
                        <h4 class="card-title text-center">Moisturizer - Cethapil </h4>
                        <h5 class="card-title text-center">IDR 300.000 </h5>
                        <center>
                            <a href="admin/cetaphil" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="admin/imgProduct/skintific/sunscreen/sunscreen.png" class="card-img-top" alt="sun screen skintific">
                    <section class="card-body">
                        <h4 class="card-title text-center">Serum Sun Screen - Skintific </h4>
                        <h5 class="card-title text-center">IDR 120.000 </h5>
                        <center>
                            <a href="admin/skintific" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
                </section>
            </section>
            <section class="col">
                <section class="card h-100">
                    <img src="admin/imgProduct/theOrdinary/serum/serum.png" class="card-img-top" alt="the ordianry">
                    <section class="card-body">
                        <h4 class="card-title text-center">Serum - The Ordinary</h4>
                        <h5 class="card-title text-center">IDR 200.000</h5>
                        <center>
                            <a href="admin/theOrdinary" type="button" class="btn btn-round" style="font-size: 15px; background-color: #3F4726; color: white; padding: 10px 40px 10px 40px;">buy
                                now</a>
                        </center>
                    </section>
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
                            <a href="shop" class="text-black">Shoping now</a>
                        </li>
                        <li>
                            <a href="offers" class="text-black">Offers for you</a>
                        </li>
                        <li>
                            <a href="faq" class="text-black">More about us</a>
                        </li>
                        <li>
                            <a href="brand" class="text-black">Brands collaborations</a>
                        </li>
                    </ul>
                </section>
                <!--end grid column-->

                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <h5 class="text-uppercase mb-4">LINK IN</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="faq#contactUs" class="text-black">Contact us</a>
                        </li>
                        <li>
                            <a href="shop" class="text-black">Skincare base on category</a>
                        </li>
                        <li>
                            <a href="brand" class="text-black">Skincare base on brand</a>
                        </li>
                        <li>
                            <a href="account/login" class="text-black">Login</a>
                        </li>
                        <li>
                            <a href="account/register" class="text-black">Sign In</a>
                        </li>
                    </ul>
                </section>
                <!--end grid column-->

                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <form action="action3" method="POST" id="form-reset">
                        <h5 class="text-uppercase mb-4">Sign up to our newsletter</h5>
                        <section class="form-outline form-black mb-4">
                            <section style="display: flex;">
                                <input type="email" id="form5Example2" class="form-control" placeholder="Enter your email" name="email" />
                                <button class="btn btn-dark" type="submit" id="submit-btn">Submit</button>
                            </section>
                            <section id="message" style="display: none;"></section>
                        </section>
                        <div class="alert alert-success" role="alert" style="position: fixed; bottom: 20px; right: 20px; max-width: 300px; z-index: 9999; overflow-y: auto; max-height: 80vh; display: none;"></div>
                    </form>
                </section>
                <!--end grid column-->
            </section>
            <!-- end grid row-->
        </section>
        <!-- end rid container -->

        <!-- payment -->
        <section class="container text-center">
            <section class="row">
                <section class="col">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/bca.png" alt="bca">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/bni.png" alt="bni">
                </section>
                <section class="col">
                    <img class="cap" style="height: 100px;" src="atribut/payment method/linebank.png" alt="line bank">
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
            <p>&copy;<span id="tahun-copyright"></span> create with <i class="bi bi-emoji-smile"></i></i>.</p>
        </section>
        <script>
            document.getElementById("tahun-copyright").innerHTML =
                new Date().getFullYear();
        </script>


        <!-- script newsletter -->
        <script>
            $("form#form-reset").submit(function(event) {
                event.preventDefault(); // mencegah form untuk submit secara bawaan

                // mengambil data dari form
                var formData = $("form").serialize();

                // mengirimkan data ke server menggunakan AJAX
                $.ajax({
                    url: "action3",
                    type: "POST",
                    data: formData,
                    success: function(data) {
                        // menampilkan pesan sukses
                        $(".alert-success")("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>You'll get newsletter😊</strong>");
                        $(".alert-success").show();

                        // reset form
                        $("#form-reset")[0].reset();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // menampilkan pesan error
                        $(".alert")("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error:</strong> " + errorThrown);
                        $(".alert").show();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {

                $(".itemQty").on("change", function() {

                    var hide = $(this).closest("tr");

                    var id = hide.find(".pid").val();
                    var price = hide.find(".pprice").val();
                    var qty = hide.find(".itemQty").val();
                    location.reload(true);
                    $.ajax({
                        url: "action",
                        method: "post",
                        cache: false,
                        data: {
                            pqty: qty,
                            pid: id,
                            pprice: price
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });

                load_cart_item_number();

                function load_cart_item_number() {
                    $.ajax({
                        url: "action",
                        method: "get",
                        data: {
                            cartItem: "cart_item"
                        },
                        success: function(response) {
                            $("#cart-item")(response);
                        }
                    });
                }
            });
        </script>
        <!-- nambah item ke keranjang scr dinamis -->
        <?php
        session_start();
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on("click", "#addItem", function(e) {
                    e.preventDefault();
                    var form = $(this).closest(".form-submit");
                    var id = form.find(".pid").val();
                    var name = form.find(".pname").val();
                    var price = form.find(".pprice").val();
                    var image = form.find(".pimage").val();
                    var code = form.find(".pcode").val();
                    // var user_id = form.find(".puser_id").val();

                    $.ajax({
                        url: "action",
                        method: "post",
                        data: {
                            pid: id,
                            pname: name,
                            pprice: price,
                            pimage: image,
                            pcode: code,
                            // puser_id: user_id
                        },
                        success: function(response) {
                            $(".alert-message")(response);
                            load_cart_item_number();
                        }
                    });
                });

                load_cart_item_number();

                function load_cart_item_number() {
                    $.ajax({
                        url: "action",
                        method: "get",
                        data: {
                            cartItem: "cart_item"
                        },
                        success: function(response) {
                            $("#cart-item")(response);
                        }

                    });
                }
            });
        </script>
    </footer>
</body>

</html>