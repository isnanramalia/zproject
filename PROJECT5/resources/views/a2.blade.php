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
    <title>5 Manfaat Tea Tree Oil untuk Wajah - skinker</title>
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
                        <h2>ANDA PERLU TAHU! INI 5 MANFAAT TEA TREE OIL UNTUK WAJAH</h2>
                        <br>
                        <p>Sudah bukan rahasia umum bahwa teh adalah tumbuhan yang memiliki banyak manfat untuk tubuh.
                            Mulai
                            dari teh hijau, teh hitam, hingga teh putih, masing-masing punya khasiat tersendiri. Lalu,
                            bagaimana
                            dengan tea tree oil yang belakangan ini semakin populer di dunia kecantikan dan juga
                            perawatan
                            kulit? Jenis teh yang seperti apakah ini? Lalu apa pula manfaat tea tree oil yang bisa Anda
                            nikmati?</p><br>
                        <h3>YUK KENALAN!</h3>
                        <p>
                            Sebelum mendalami lebih lanjut tentang berbagai manfaat tea tree oil, pertama-tama Anda
                            perlu
                            kenalan
                            dulu dengan jenis teh yang satu ini. Dalam terjemahan Bahasa Indonesia, tea tree oil adalah
                            minyak
                            pohon teh atau kerap disebut juga sebagai minyak atsiri esensial. Asalnya dari tanaman
                            Melaleuca
                            Alternifolia yang hanya ada di benua tetangga kita, yaitu Australia. Jadi, bukan dari pohon
                            teh
                            untuk membuat minuman seperti yang ada di Indonesia dan kebanyakan negara di Asia, ya!
                        </p>
                        <p>
                            Di dunia kecantikan dan perawatan kulit, saat ini tea tree oil sedang jadi primadona karena
                            memiliki
                            banyak manfaat untuk tubuh, mulai dari kulit wajah, aroma tubuh, hingga rambut. Di
                            Australia,
                            sejak
                            100 tahun terakhir, tea tree oil bahkan digunakan sebagai minyak antiseptik dan anti
                            inlflamasi
                            serbaguna. Hebatnya lagi, salah satu manfaat tea tree oil yang terbesar bagi kulit wajah
                            adalah
                            untuk meredakan atau mengatasi jerawat.</p>
                        <h3>SAHABAT BARU KULIT</h3>
                        <p>
                            5 manfaat tea tree oil untuk kulit wajah, terutama kulit yang berjerawat, adalah sebagai
                            berikut:</p>
                        <ol>
                            <li>Mengempiskan jerawat tanpa efek samping
                                <br>
                                <span>Di dalam tea tree oil terdapat kandungan yang sama efektifnya dengan zat benzoil
                                    peroksida yang terkandung di dalam obat jerawat. Bedanya, tea tree oil tidak
                                    menghasilkan efek samping seperti kulit yang memerah, kering, atau
                                    mengelupas.</span>
                            </li>
                            <li>Membuka kelenjar minyak yang tersumbat.</li><br>
                            <span>Salah satu penyebab jerawat adalah kelenjar minyak yang tersumbat. Pemakaian tea tree
                                oil dapat membuka kelenjar yang tersumbat itu sehingga tidak menjadi bakal
                                jerawat.</span>
                            <li>Membersihkan minyak berlebih di wajah berjerawat</li><br><span>Saat digunakan pada kulit
                                wajah, terutama pada kulit wajah yang berjerawat, tea tree oil akan ‘menyapu’ bersih
                                minyak berlebih yang ada.</span>
                            <li>Menenangkan pori-pori penyebab jerawat</li><br><span>Tea tree oil mengandung antibakteri
                                atau disinfektan yang dapat membersihkan dan menenangkan pori-pori yang menyebabkan
                                jerawat.</span>
                            <li>Mengeringkan komedo & noda hitam akibat jerawat</li><br><span>Manfaat tea tree oil ini
                                berguna untuk komedo atau jerawat-jerawat yang ada di area hidung. Bila dipakai secara
                                teratur, sekaligus dapat menghilangkan noda-noda bekas jerawat.</span>
                        </ol>
                        <h3>YUK KENALAN!</h3>
                        <p>
                            Sebelum mendalami lebih lanjut tentang berbagai manfaat tea tree oil, pertama-tama Anda
                            perlu
                            kenalan
                            dulu dengan jenis teh yang satu ini. Dalam terjemahan Bahasa Indonesia, tea tree oil adalah
                            minyak
                            pohon teh atau kerap disebut juga sebagai minyak atsiri esensial. Asalnya dari tanaman
                            Melaleuca
                            Alternifolia yang hanya ada di benua tetangga kita, yaitu Australia. Jadi, bukan dari pohon
                            teh
                            untuk membuat minuman seperti yang ada di Indonesia dan kebanyakan negara di Asia, ya!
                        </p>
                        <p>
                            Di dunia kecantikan dan perawatan kulit, saat ini tea tree oil sedang jadi primadona karena
                            memiliki
                            banyak manfaat untuk tubuh, mulai dari kulit wajah, aroma tubuh, hingga rambut. Di
                            Australia,
                            sejak
                            100 tahun terakhir, tea tree oil bahkan digunakan sebagai minyak antiseptik dan anti
                            inlflamasi
                            serbaguna. Hebatnya lagi, salah satu manfaat tea tree oil yang terbesar bagi kulit wajah
                            adalah
                            untuk meredakan atau mengatasi jerawat.</p>
                        <h3>TAHUKAN KAMU/</h3>
                        <p>
                            Setelah tahu manfaat tea tree oil, selanjutnya Anda perlu tahu juga cara pemakaiannya. Untuk
                            wajah yang berjerawat, teteskan sedikit tea tree oil di atas cotton bud, lalu oleskan di
                            area
                            kulit yang kemerahan atau berjerawat. Biarkan selama beberapa jam atau semalaman supaya
                            kandungannya dapat menyerap dan bekerja dengan maksimal. Keesokan harinya, biasanya jerawat
                            sudah mengempis dan warna kemerahannya memudar. Kondisi kulit pun mereda.
                        </p>
                        <p>
                            Selain digunakan dengan cara di atas, tea tree oil juga bisa digunakan dengan cara yang
                            lain,
                            yaitu dicampur ke dalam masker dan scrub wajah sebelum Anda aplikasikan pada kulit wajah.
                            Tea
                            tree oil juga bisa Anda teteskan ke jari atau telapak tangan untuk kemudian digunakan
                            sebagai
                            minyak pijat untuk melembapkan kulit wajah.
                        </p>
                        Apapun cara yang Anda pilih, sebaiknya gunakan produk tea tree oil yang asli dan bebas paraben.
                        Beruntung, The Body Shop® sudah menyediakan produk tea tree oil yang seperti itu dalam dua
                        kemasan praktis, yaitu ukuran 20ml dan 10ml.
                        <p>
                            Tea Tree Oil dari The Body Shop® mengandung 100% tea tree oil murni. Untuk mendapatkannya,
                            Anda
                            tinggal mendatangi gerai-gerai The Body Shop® di berbagai pusat perbelanjaan, atau buka
                            situs
                            resminya. Klik sekarang supaya bisa segera memanfaatkan seluruh kebaikan dari tea tree oil
                            sekarang juga.
                        </p>
                        </p>
                        <p>&nbsp;
                        </p>
                        <p>Temukan di
                            artikel selanjutnya:</p>
                        <p><a href="a2"><span style="font-family: arial, helvetica, sans-serif; font-size: medium; color: #898F73;"><strong>Ingredients</strong></a>
                        </p>
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