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
    <title>Ketahui Tipe Kulitmu Melalui Cara Ini - skinker</title>
</head>



<body style="margin-top: 60px; padding-top: 60px; background-color: #EFF0EC;">
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


    <!-- ----------------------------------|KONTEN|------------------------------ -->
    <main>
        <h1 style="text-align: center;">Artikel</h1>
        <section class="container">
            <section class="row">
                <div class="col-2"></div>
                <div class="col-8 artikel">
                    <article>
                        <h2>KNOW YOUR SKIN TYPE</h2><br>
                        <p>Siapa yang selama ini masih mengira-ngira soal tipe kulit yang dimiliki? #BeautyHaulSquad,
                            Secara umum, ada 5 tipe kulit wajah yang diketahui banyak orang. Di antaranya kulit normal,
                            kulit kering, kulit berminyak, kulit kombinasi, dan kulit sensitif.

                            Supaya tidak mengira-ngira, yuk lakukan hal di bawah ini agar kalian dapat menentukan tipe
                            kulit kalian:</p>
                        <p>Siapa yang selama ini masih mengira-ngira soal tipe kulit yang dimiliki?
                            #BeautyHaulSquad, Secara umum, ada 5 tipe kulit wajah yang diketahui banyak orang. Di
                            antaranya kulit normal, kulit kering, kulit berminyak, kulit kombinasi, dan kulit
                            sensitif. </p>
                        <p>Supaya tidak mengira-ngira, yuk lakukan hal di bawah ini agar kalian dapat menentukan
                            tipe kulit kalian:</p>
                        <p>&nbsp;</p>
                        <p><strong>STEP 1</strong></p>
                        <p>Bersihkan wajah kalian menggunakan facial cleanser. Setelah selesai, jangan gunakan
                            skincare apa pun dan diamkan wajah selama 15-30 menit.</p>
                        <p>&nbsp;</p>
                        <p><strong>STEP 2</strong></p>
                        <p>Setelah didiamkan, tempelkan kertas minyak pada area wajah seperti dahi, pipi dan dagu.
                        </p>
                        <p>Hasilnya:</p>
                        <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jika terdapat bercak minyak yang cukup banyak
                            pada kertas minyak, dapat disimpulkan bahwa tipe kulit kamu berminyak.</p>
                        <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Untuk tipe kulit kering, akan terdapat bercak
                            minyak namun hanya sedikit sehingga hal ini yang membuat kertas minyak akan terjatuh
                            dengan sendirinya dari wajah.</p>
                        <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada tipe kulit kombinasi, akan terlihat
                            bercak minyak yang berlebih pada area T-zone. Sedangkan pada area U-zone, bercak minyak
                            tidak akan terlihat sehingga kertas minyak akan terjatuh dengan sendirinya dari area
                            tersebut.</p>
                        <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Untuk tipe kulit normal, akan terdapat
                            sedikit bercak minyak pada bagian jidat dan hidung.</p>
                        <p>&nbsp;</p>
                        <p>Selain itu, jika kalian tidak ingin memakai kertas minyak atau blotting paper, kalian
                            bisa coba metode <em>bare face </em>untuk menentukan tipe kulit kalian. Caranya,
                            bersihkan wajah dengan face wash. Lalu, tepuk perlahan wajah dengan handuk tanpa
                            menggunakan produk skincare setelahnya. Diamkan kulit wajahmu selama 25 hingga 30 menit,
                            kemudian coba analisa kulitmu. Lihat, apakah kulit wajah tampak berminyak pada area pipi
                            dan T-zone? Kalau iya, berarti tipe kulitmu berminyak. Apakah kulit kamu seperti ketarik
                            serta terlihat <em>flaky? </em>Berarti tipe kulitmu kering. Kalau kamu melihat ada
                            beberapa bagian yang kering namun juga berminyak, itu tandanya kamu memiliki kulit
                            kombinasi.</p>
                        <p>&nbsp;
                        </p>
                        <p>Temukan di
                            artikel selanjutnya:</p>
                        <p><a href="a4"><span style="font-family: arial, helvetica, sans-serif; font-size: medium; color: #898F73;"><strong>Step
                                        By Step dalam Basic Skincare</strong></a></p>
                    </article>
                </div>
                <div class="col-2"></div>
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