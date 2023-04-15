<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>offers - skinker</title>
</head>

<body style="margin-top: 90px; padding-top: 80px;">
    <header>
        <?php
        require_once('php/header.php');
        ?>
    </header>


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
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/cartAmount.php') ?>
    </footer>
</body>

</html>