<?php
require_once('php/component.php');
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
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- link js -->
    <script src="js/script.js"></script>

    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h355rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

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
        <a href="index.html" class="logo"><span>SKINKER</span></a>
        <nav>
            <ul class="navbar">
                <li><a href="shop.html" class="active">SHOP</a></li>
                <li><a href="brand.html">BRANDS</a></li>
                <li><a href="offers.html">OFFERS</a></li>
                <li><a href="faq.html">F.A.Q.</a></li>
                <li><a href="tipsNadvice.html">TIPS & ADVICE</a></li>
            </ul>
        </nav>
        <section class="main">
            <a href=""><i class="bi bi-search"></i></a>
            <a href="#"><b>|</b></a>
            <a href="account/login.html">ACCOUNT <i class="ri-user-fill"></i></a>
            <a href="cart.html">CART <i class="bi bi-bag"></i></a>
            <section class="bx bx-menu" id="menu-icon"></section>
        </section>
    </header>


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
                    <?php
                    component(productname: "Cerave Moisturizer", productprice: 100000, productimg: "admin/imgProduct/cerave/moisturizer/moisturizer.jpg");
                    component(productname: "Cethapil Moisturizer", productprice: 100000, productimg: "admin/imgProduct/cetaphil/moisturizer/moisturizer.jpg");
                    component(productname: "[Best Seller] Cethapil Moisturizer", productprice: 100000, productimg: "atribut/best seller/cetaphil.png");
                    component(productname: "Cosrx Moisturizer", productprice: 100000, productimg: "admin/imgProduct/cosrx/moisturizer/moisturizer.jpg");
                    component(productname: "D`alba Moisturizer", productprice: 100000, productimg: "admin/imgProduct/dalba/moisturizer/moisturizer.jpg");
                    component(productname: "ElseSkin Moisturizer", productprice: 100000, productimg: "admin/imgProduct/elsheskin/moisturizer/moisturizer.jpg");
                    component(productname: "Estee Lauder Moisturizer", productprice: 100000, productimg: "admin/imgProduct/esteelauder/moisturizer/moisturizer.jpg");
                    component(productname: "InnisfreeMoisturizer", productprice: 100000, productimg: "admin/imgProduct/innisfree/moisturizer/moisturizer.jpg");
                    component(productname: "Laneige Moisturizer", productprice: 100000, productimg: "admin/imgProduct/laneige/moisturizer/moisturizer.jpg");
                    component(productname: "Larocheposay Moisturizer", productprice: 100000, productimg: "admin/imgProduct/larocheposay/moisturizer/moisturizer.jpg");
                    component(productname: "Scarlett Day Moisturizer", productprice: 100000, productimg: "admin/imgProduct/scarlett/moisturizer/moisturizer.jpg");
                    component(productname: "Scarlett Night Moisturizer", productprice: 100000, productimg: "admin/imgProduct/scarlett/moisturizer/moisturizer acne night.jpg");
                    ?>
                </section>

                <!------------------------------SUNSCREEN-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="sunscreen" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Sunscreen</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                    <?php
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/cerave/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/cetaphil/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/cosrx/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/dalba/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/elsheskin/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/esteelauder/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/innisfree/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/laneige/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/larocheposay/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/sunscreen/sunscreen.jpg");
                    component(productname: "Sunscreen", productprice: 100000, productimg: "admin/imgProduct/nivea/sunscreen/sunscreen.jpg");
                    ?>

                    <!------------------------------CLEANSER-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="cleanser" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Cleanser</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/cerave/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/cetaphil/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/cosrx/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/dalba/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/elsheskin/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/esteelauder/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/innisfree/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/laneige/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/larocheposay/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/nivea/cleanser/cleanser.jpg");
                        component(productname: "Cleanser", productprice: 100000, productimg: "admin/imgProduct/scarlett/cleanser/cleanser.jpg");
                        ?>
                    </section>

                    <!------------------------------EXFOLIANT-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="exfoliant" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Exfoliant</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Exfoliant", productprice: 100000, productimg: "admin/imgProduct/cetaphil/exfoliant/exfoliant.jpg");
                        component(productname: "Exfoliant", productprice: 100000, productimg: "admin/imgProduct/innisfree/exfoliant/exfoliant.jpg");
                        component(productname: "Exfoliant", productprice: 100000, productimg: "admin/imgProduct/laneige/exfoliant/exfoliant.jpg");
                        component(productname: "Exfoliant", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/exfoliant/exfoliant.jpg");
                        ?>
                    </section>

                    <!------------------------------LIP CARE-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="lipcare" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Lip Care</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/cerave/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/dalba/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/esteelauder/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/innisfree/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/laneige/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/lipCare/lip.jpg");
                        component(productname: "Lip Care", productprice: 100000, productimg: "admin/imgProduct/nivea/lipCare/lip.jpg");
                        ?>
                    </section>

                    <!------------------------------MASK-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="mask" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Mask</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/cosrx/mask/mask.jpg");
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/dalba/mask/mask.jpg");
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/innisfree/mask/mask.jpg");
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/laneige/mask/mask cica green.jpg");
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/laneige/mask/mask purple.jpg");
                        component(productname: "Mask", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/mask/mask.jpg");
                        ?>
                    </section>

                    <!------------------------------SERUM/ESSENCE-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="serum" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Serum and Essence</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/cerave/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/cetaphil/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/cosrx/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/dalba/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/elsheskin/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/esteelauder/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/innisfree/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/laneige/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/larocheposay/serum/serum.jpg");
                        component(productname: "Serum", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/serum/serum.jpg");
                        ?>
                    </section>

                    <!------------------------------EYE TREATMENT-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="eyetreatment" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Eye Treatment</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/cerave/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/cosrx/eye treatment/eye hydrogel.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/cosrx/eye treatment/eye peptide.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/dalba/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/esteelauder/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/innisfree/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "atribut/best seller/kiehls.png");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/laneige/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/eye treatment/eye.jpg");
                        component(productname: "Eye Treatment", productprice: 100000, productimg: "admin/imgProduct/scarlett/eye treatment/eye.jpg");
                        ?>
                    </section>

                    <!------------------------------TONER-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="toner" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Toner</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/cerave/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/cosrx/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/dalba/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/elsheskin/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/innisfree/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/laneige/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/larocheposay/toner/toner.jpg");
                        component(productname: "Toner", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/toner/toner.jpg");
                        ?>
                    </section>

                    <!------------------------------SET BUNDLES-------------------------->
                    <section style="margin: 40px;padding: 40px;"></section>
                    <section id="setbundle" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <h2 style="font-size: medium; text-align: center;">Set Bundle</h2>
                    </section>
                    <section class="card-deck d-flex justify-content-center">
                        <?php
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/innisfree/set bundle/bundles green tea.png");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/set bundle/set bundle coconut body trio.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/mariobadescu/set bundle/set bundle mini mist collection.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sensatia/set bundle/set bundle combination skin.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sensatia/set bundle/set bundle dry skin.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sensatia/set bundle/set bundle normal skin.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sensatia/set bundle/set bundle sensitive skin.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sk-ii/set bundle/set bundle pitera aura.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sk-ii/set bundle/set bundle pitera power.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/sk-ii/set bundle/set bundle pitera welcome.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/skintific/set bundle/set bundle.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "dmin/imgProduct/theBodyShop/set bundle/set bundle.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/theOrdinary/set bundle/set bundle.jpg");
                        component(productname: "Set Bundle", productprice: 100000, productimg: "admin/imgProduct/yvesrocher/set bundle/set bundle.jpg");
                        ?>
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
                            <a href="shop.html" class="text-black">Shoping now</a>
                        </li>
                        <li>
                            <a href="offers.html" class="text-black">Offers for you</a>
                        </li>
                        <li>
                            <a href="faq.html" class="text-black">More about me</a>
                        </li>
                        <li>
                            <a href="brand.html" class="text-black">Brands collaborations</a>
                        </li>
                    </ul>
                </section>
                <!--Grid column-->

                <!--Grid column-->
                <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                    <h5 class="text-uppercase mb-4">LINK IN</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="faq.html#contactUs" class="text-black">Contact us</a>
                        </li>
                        <li>
                            <a href="shop.html" class="text-black">Skincare base on category</a>
                        </li>
                        <li>
                            <a href="brand.html" class="text-black">Skincare base on brand</a>
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