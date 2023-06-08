<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>tips & advice - skinker</title>
</head>


<body style="margin-top: 100px; padding-top: 50px;  background-color: white;">
    <header>
        <?php
        require_once('php/header.php');
        ?>
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
                    <img src="admin tipsNadvice/img tips&advice/1.jpg" alt="tips 1" class="artikelTipsnAdvice" onclick="window.location.href='admin tipsNadvice/a1.php'">
                    <h5>5 Manfaat Tea Tree Oil untuk Wajah</h5>
                </section>
                <section class="col">
                    <img src="admin tipsNadvice/img tips&advice/2.jpg" alt="tips 2" class="artikelTipsnAdvice" onclick="window.location.href='admin tipsNadvice/a2.php'">
                    <h5>Edelweiss Steam Cells From Italy</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/3.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='admin tipsNadvice/a3.php'">
                    <h5>Ketahui Tipe Kulitmu Melalui Cara Ini</h5>
                </section>
            </section><br><br><br>
            <section class=" row">
                <section class="col">
                    <img src="admin tipsNadvice/img tips&advice/4.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='admin tipsNadvice/a4.php'">
                    <h5>Step By Step dalam Basic Skincare</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/5.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='admin tipsNadvice/a5.php'">
                    <h5>Mulai Lakukan Basic Skincare Saat Ini</h5>
                </section>
                <section class=" col">
                    <img src="admin tipsNadvice/img tips&advice/6.jpg" alt="tips 3" class="artikelTipsnAdvice" onclick=" window.location.href='admin tipsNadvice/a6.php'">
                    <h5>Kulit Rentan Berjerawat</h5>
                </section>
            </section>
            <br>
        </section>
        <hr>
    </main>


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class=" text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/cartAmount.php') ?>
    </footer>

    <style>
        .col h5 {
            text-align: center;
        }
    </style>
</body>

</html>