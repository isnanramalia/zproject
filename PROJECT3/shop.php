<?php
require_once('php/component.php');
require_once('php/CreateDb.php');

// create instance of CreateDb class
$database = new CreateDb(dbname: "Productdb", tablename: "Producttb");

session_start();
// pastikan session_start() sudah dipanggil sebelum kode ini
if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {
        // jika session cart sudah ada
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_GET['id'], $item_array_id)) {
            // jika produk sudah ada di dalam cart, tingkatkan jumlahnya
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['product_id'] == $_GET['id']) {
                    $_SESSION['cart'][$key]['quantity'] += 1;
                }
            }
        } else {
            // jika produk belum ada di dalam cart, tambahkan produk baru
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_GET['id'],
                'product_name' => $_POST['hidden_name'],
                'product_price' => $_POST['hidden_price'],
                'product_image' => $_POST['hidden_image'],
                'quantity' => 1
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        // jika session cart belum ada, tambahkan produk baru
        $item_array = array(
            'product_id' => $_GET['id'],
            'product_name' => $_POST['hidden_name'],
            'product_price' => $_POST['hidden_price'],
            'product_image' => $_POST['hidden_image'],
            'quantity' => 1
        );
        $_SESSION['cart'][0] = $item_array;
    }
}


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
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }

                    if (isset($_POST['add'])) {
                        print_r($_POST['product_id']);
                    }
                    ?>
                    <script>
                        function addToCart(productId) {
                            // kirim permintaan AJAX ke halaman keranjang belanja
                            // dengan menggunakan ID produk yang dipilih
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'cart.php');
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    // respons sukses
                                    alert('Product added to cart!');
                                } else {
                                    // respons gagal
                                    alert('Failed to add product to cart!');
                                }
                            };
                            xhr.send('product_id=' + productId);
                        }
                    </script>

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