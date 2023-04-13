<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>f.a.q. - skinker</title>
</head>


<body style="margin-top: 50px; padding-top: 50px;">
    <?php
    require_once('php/header.php');
    ?>

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
                    <form name="contactForm" onsubmit="return validateForm()">
                        <section style="display: flex;">
                            <input type="text" id="name" name="name" placeholder="Your name" style=" margin-right: 15px;"><br>
                            <input type="email" id="email" name="email" placeholder="Your email" style=" margin-left: 15px;"><br>
                        </section>
                        <input type="tel" id="phone" name="phone" placeholder="Your phone"><br>
                        <textarea id="message" name="message" rows="4" cols="50" placeholder="Your message"></textarea><br>
                        <input type="submit" value="SEND MESSAGE">
                    </form>
                </section>
                <section class="col-1"></section>
            </section>
            <section class="row" style="height: 50px;"></section>
        </section>
    </main>


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: #EFF0EC;">
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/cartAmount.php') ?>
    </footer>
</body>

</html>