<?php
session_start();
?>
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
    <title>f.a.q. - skinker</title>
</head>


<body style="margin-top: 50px; padding-top: 50px;">
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

    <!-- ----------------------------------------- FAQ ------------------------------------- -->
    <main class="container">
        <section class="row">
            <section class="col-3 justify-content-center">
                <h1 class="mx-auto text-center" style="padding-right: 50%;
                padding-top: 50%;
                padding-bottom: 50%;
                margin-right: 50%;
                margin-top: 50%;
                margin-bottom: 50%;">
                    F.A.Q</h1>
            </section>
            <section class="col-7">
                <!-- ini adalah container didalam container (main dari FAQ) -->
                <section class="container">
                    <section class="row rounded">
                        <h1>SKINKER adalah website apa?</h1>
                        <hr>
                        <p>SKINKER adalah sebuah e-commerce yang dibuat sendiri oleh ISNA GROUP. Sudah berdiri sejak
                            Januari 2022, Web Aplikasi yang digunakan untuk menjual dan membeli produk </p>
                    </section>
                    <section class="row rounded">
                        <h1>Bahasa yang digunakan dalam SKINKER bahasa apa?</h1>
                        <hr>
                        <p>Bahasa utama dari SKINKER adalah Bahasa Inggris. Kenapa Bahasa Inggris? Karena SKINKER
                            bertujuan untuk berkontribusi sebagai e-commerce internasional sehingga seluruh dunia bisa
                            mengakses dan memahami SKINKER dengan mudah</p>
                    </section>
                    <section class="row rounded">
                        <h1>Apa saja yang dapat didapat saat mengakses website SKINKER?</h1>
                        <hr>
                        <p>SKINKER dengan kemampuan utama sebagai website untuk membeli skincare terbaik yang ada di
                            dunia, menampilkan produk high end hingga low end.
                        </p>
                    </section>
                    <section class="row rounded">
                        <h1>Apakah produk yang ada di SKINKER semuanya tersertifikasi GLUTEN-FREE?</h1>
                        <hr>
                        <p>Yes, Satya is 100% gluten-free.
                            <br><br>
                            At Satya, we only use PROVEN safe, gluten-free oats for our colloidal oatmeal. Most oats are
                            cross-contaminated with wheat and it can be hard to know if they contain gluten or not.
                            <br><br>
                            For our Satya family with celiac conditions, gluten intolerance, or allergies associated
                            with eczema, you can be rest assured that the Satya formula is 100% gluten-free!
                        </p>
                    </section>
                    <section class="row rounded">
                        <h1>Apakah harus sign in akun?</h1>
                        <hr>
                        <p>Tidak, kamu tidak harus melakukan sign in pada website ini. Saat ingin membeli tanpa sign in
                            sah-sah saja namun, tidak akan ada riwayat pembelian kamu.</p>
                    </section>
                </section>
                <!-- end container didalam container (main dari FAQ) -->
            </section>
            <section class="col-2"></section>
        </section>
    </main>


    <!-- ------------------------------------- CONTACT US ---------------------------------- -->
    <main style="background-color: white;">
        <hr>
        <h1 style="text-align: center; margin: 50px;" id="contactUs">Contact Us</h1>
        <section class="container">
            <section class="row">
                <section class="col-1"></section>
                <section class="col-10">
                    <form name="contactForm" onsubmit="return validateForm()" method="post" id="form-contact">
                        <section style="display: flex;">
                            <input type="text" id="pname" name="name" placeholder="Your name" style=" margin-right: 15px;"><br>
                            <input type="email" id="pemail" name="email" placeholder="Your email" style=" margin-left: 15px;"><br>
                        </section>
                        <input type="tel" id="pphone" name="phone" placeholder="Your phone" pattern="[0-9]{0,13}" title="Please enter only numbers with a maximum length of 13 digits" maxlength="13"><br>
                        <textarea id="pmessage" name="message" rows="4" cols="50" placeholder="Your message"></textarea><br>
                        <input type="submit" value="SEND MESSAGE">
                        <div class="alert alert-success" role="alert" style="display: none;"></div>
                    </form>
                </section>
                <section class="col-1"></section>
            </section>
            <section class="row" style="height: 50px;"></section>
        </section>
    </main>


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

    <script>
        // menangkap event submit pada form
        $("form#form-contact").submit(function(event) {
            // mencegah form untuk melakukan submit secara normal
            event.preventDefault();

            // mengambil data dari form
            var formData = $(this).serialize();

            // mengirimkan data ke server menggunakan AJAX
            $.ajax({
                url: "action2",
                type: "POST",
                data: formData,
                success: function(data) {
                    // menampilkan pesan sukses
                    $(".alert-success").html("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Your message has been sent😊!</strong>");
                    $(".alert-success").show();

                    // reset form
                    $("#form-contact")[0].reset();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // menampilkan pesan error
                    $(".alert").html("<button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error:</strong> " + errorThrown);
                    $(".alert").show();
                }
            });
        });
    </script>
</body>

</html>