<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>shop - skinker</title>
</head>


<body style="margin-top: 50px; padding-top: 50px;">
    <?php
    require_once('php/header.php');
    ?>


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
                    require_once "dbconfig.php";
                    $select_stmt = $db->prepare("SELECT * FROM product");
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_price = $row['product_price'];
                        $product_image = $row['product_image'];
                    ?>
                        <section class="card col-lg-4 col-md-6 mb-4">
                            <form class="form-submit">
                                <input type="hidden" class="pid" value="<?php echo $product_id ?>">
                                <input type="hidden" class="pname" value="<?php echo $product_name ?>">
                                <input type="hidden" class="pprice" value="<?php echo $product_price ?>">
                                <input type="hidden" class="pimage" value="<?php echo $product_image ?>">
                                <div class="card-body">
                                    <img class="card-img-top" src="images/<?php echo $product_image ?>" alt="products">
                                    <h2 class="card-title"><?php echo $product_name ?></h2>
                                    <p class="card-text price">IDR <?php echo $product_price ?></p>
                                    <button id="addItem" class="btn btn-block">Add to Cart</button>
                                </div>
                            </form>
                        </section>
                    <?php
                    }
                    ?>

                </section>



                <!------------------------------SUNSCREEN-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="sunscreen" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Sunscreen</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                </section>


                <!------------------------------CLEANSER-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="cleanser" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Cleanser</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------EXFOLIANT-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="exfoliant" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Exfoliant</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------LIP CARE-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="lipcare" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Lip Care</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------MASK-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="mask" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Mask</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">
                </section>

                <!------------------------------SERUM/ESSENCE-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="serum" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Serum and Essence</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------EYE TREATMENT-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="eyetreatment" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Eye Treatment</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------TONER-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="toner" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Toner</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

                <!------------------------------SET BUNDLES-------------------------->
                <section style="margin: 40px;padding: 40px;"></section>
                <section id="setbundle" style="background-color: white; font-size: medium; padding: 30px;margin: 30px; border: 0.3px solid  rgba(0, 0, 0, 0.3); border-top-left-radius: 50%; border-bottom-right-radius: 50%;">
                    <h2 style="font-size: medium; text-align: center;">Set Bundle</h2>
                </section>
                <section class="card-deck d-flex justify-content-center">

                </section>

            </section>
    </main>



    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('php/footer.php') ?>
    </footer>
</body>

</html>