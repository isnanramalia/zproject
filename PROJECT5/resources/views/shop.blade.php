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
    <title>shop - skinker</title>
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


    <!-- ---------------------------|START CONTAINER|------------------------------ -->
    <main class="container">
        <section class="row">
            <!-- ---------------------------------------|| section 1(asside filter) ||----------------------------------------------- -->
            <section class="col-2 py-5" style="position: sticky;">
                <aside style="position: fixed;">
                    <h1 style="margin-left: 45px; margin-top: 20px; padding-top: 40px; font-size: 30px;">
                        Filter</h1>
                    <ul class=" list-group-vertical-md">
                        <li class="list-group-item"><a href="#moisturizer">Moisturizer</a></li>
                        <li class="list-group-item"><a href="#sunscreen">Sunscreen</a></li>
                        <li class="list-group-item"><a href="#cleanser">Cleanser</a></li>
                        <li class="list-group-item"><a href="#exfoliant">Exfoliant</a></li>
                        <li class="list-group-item"><a href="#lipcare">Lip Care</a></li>
                        <li class="list-group-item"><a href="#mask">Mask</a></li>
                        <li class="list-group-item"><a href="#serum">Serum</a></li>
                        <li class="list-group-item"><a href="#eyetreatment">Eye Treatment</a></li>
                        <li class="list-group-item"><a href="#toner">Toner</a></li>
                        <li class="list-group-item"><a href="#setbundle">Set Bundle</a></li>
                    </ul>
                </aside>
            </section>


            <!-- ---------------------------------------|| section 2(all products) ||----------------------------------------------- -->

            <section class="col-10 py-5" style="overflow: auto;">
                <h1 style=" text-align: center; padding-bottom: 10px; margin-bottom: 10px;">
                    Product</h1>
                <hr>
                <!------------------------------MOISTURIZER-------------------------->
                <section id="moisturizer" style="background-color: white; font-size: medium; padding: 30px;margin: 30px;border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Moisturizer</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/cerave/moisturizer/moisturizer.jpg" alt="cerave products">
                        <section class="card-body">
                            <h2 class="card-title">CERAVE Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2 " style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/cetaphil/moisturizer/moisturizer.jpg" alt="cethapil product">
                        <section class="card-body">
                            <h2 class="card-title">CETAPHIL Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/cosrx/moisturizer/moisturizer.jpg" alt="cosrx product">
                        <section class="card-body">
                            <h2 class="card-title">COSRX Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/dalba/moisturizer/moisturizer.jpg" alt="dalba product">
                        <section class="card-body">
                            <h2 class="card-title">D'ALBA Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/elsheskin/moisturizer/moisturizer.jpg" alt="elsheskin product">
                        <section class="card-body">
                            <h2 class="card-title">ELSHESKIN Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/esteelauder/moisturizer/moisturizer.jpg" alt="estee lauder product">
                        <section class="card-body">
                            <h2 class="card-title">ESTEE LAUDER Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/innisfree/moisturizer/moisturizer.jpg" alt="innisfree product">
                        <section class="card-body">
                            <h2 class="card-title">INNISFREE Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/laneige/moisturizer/moisturizer.jpg" alt="laneige product">
                        <section class="card-body">
                            <h2 class="card-title">LANEIGE Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/larocheposay/moisturizer/moisturizer.jpg" alt="la roche posay product">
                        <section class="card-body">
                            <h2 class="card-title">LA ROCHE POSAY Moisturizer</h2>
                            <p class="card-text">IDR 200.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2 " style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/scarlett/moisturizer/moisturizer acne day.jpg" alt="scarlett product">
                        <section class="card-body">
                            <h2 class="card-title">SCARLETT Moisturizer Acne Day</h2>
                            <p class="card-text">IDR 75.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                    <section class="card col-2" style="margin: 10px; padding: 10px;">
                        <img class="card-img-top" src="admin/imgProduct/scarlett/moisturizer/moisturizer acne night.jpg" alt="scarlett product">
                        <section class="card-body">
                            <h2 class="card-title">SCARLETT Moisturizer Acne Night</h2>
                            <p class="card-text">IDR 75.000</p>
                            <button class="btn btn-block">Buy Now</button>
                        </section>
                        <!-- End of Card Deck Layout -->
                    </section>
                </section>

            </section>
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
        <!-- nambah item ke keranjang scr dinamis -->
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
                            $(".alert-message").html(response);
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
                            $("#cart-item").html(response);
                        }

                    });
                }
            });
        </script>
    </footer>
</body>

</html>