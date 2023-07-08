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
    <title>tips & advice - skinker</title>
</head>


<body style="margin-top: 100px; padding-top: 50px;  background-color: white;">
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


    <!-- ----------------------------------------- PROLOG ------------------------------------- -->
    <main>
        <h1 style="text-align: center;">All About Skin</h1><br>
        <section class="cotainer" style="display: flex;">
            <section class="col-7">
                <img src="admin tipsNadvice/img banner/main-banner.svg" style="height: 600px;" alt="poster">
            </section>
            <section class="col-1"></section>
            <section class="col-3" style="display: grid; place-items: center;">
                <h2 style="font-size: 30px;">Learn About Skin</h2>
                <p style="font-size: 23px;">
                    Skin has three layers: The epidermis, the outermost layer of skin, provides a waterproof barrier and
                    creates our skin tone. The dermis, beneath the epidermis, contains tough connective tissue, hair
                    follicles, and sweat glands. The deeper subcutaneous tissue (hypodermis) is made of fat and
                    connective tissue.</p>
                <p>
                    Ini this page you can read all about beauty, if you want your face to shine
                    clean and get rid of acne scars or other skin problem. You can get out newest product and see the
                    glow up from this website. Enjoy it.</p>
            </section>
            <section class="col-1">
            </section>
        </section>
    </main>

    <!-- ----------------------------------------- BLOGS ------------------------------------- -->
    <main style="background-color: #EFF0EC; ;">
        <hr>
        <br><br><br><br><br>
        <section class=" container">
            <section class="row">
                <section class="col">
                    <img src="admin tipsNadvice/img tips&advice/1.jpg" alt="tips 1" class="artikelTipsnAdvice" onclick="window.location.href='a1'">
                    <h5>5 Manfaat Tea Tree Oil untuk Wajah</h5>
                </section>
                <section class="col">
                    <img src="admin tipsNadvice/img tips&advice/2.jpg" alt="tips 2" class="artikelTipsnAdvice" onclick="window.location.href='a2'">
                    <h5>Edelweiss Steam Cells From Italy</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/3.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='a3'">
                    <h5>Ketahui Tipe Kulitmu Melalui Cara Ini</h5>
                </section>
            </section><br><br><br>
            <section class=" row">
                <section class="col">
                    <img src="admin tipsNadvice/img tips&advice/4.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='a4'">
                    <h5>Step By Step dalam Basic Skincare</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/5.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='a5'">
                    <h5>Mulai Lakukan Basic Skincare Saat Ini</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/6.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='a6'">
                    <h5>Kulit Rentan Berjerawat</h5>
                </section>
            </section>
            <br>
        </section>
        <hr>
    </main>


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class=" text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
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
                        $(".alert-success").html("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>You'll get newsletter😊</strong>");
                        $(".alert-success").show();

                        // reset form
                        $("#form-reset")[0].reset();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // menampilkan pesan error
                        $(".alert").html("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error:</strong> " + errorThrown);
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
                            $("#cart-item").html(response);
                        }
                    });
                }
            });
        </script>
    </footer>

    <style>
        .col h5 {
            text-align: center;
        }
    </style>
</body>

</html>