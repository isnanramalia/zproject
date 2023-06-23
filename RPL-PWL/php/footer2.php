    <!-- FOOTER FOR BRAND PHP -->
    <!-- Grid container -->
    <section class="container p-3">
        <!--Grid row-->
        <section class="row">
            <!--Grid column-->
            <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                <h5 class="text-uppercase mb-4">OUR WORLD</h5>

                <ul class="list-unstyled mb-4">
                    <li>
                        <a href="../shop.php" class="text-black">Shoping now</a>
                    </li>
                    <li>
                        <a href="../offers.php" class="text-black">Offers for you</a>
                    </li>
                    <li>
                        <a href="../faq.php" class="text-black">More about us</a>
                    </li>
                    <li>
                        <a href="../brand.php" class="text-black">Brands collaborations</a>
                    </li>
                </ul>
            </section>
            <!--Grid column-->

            <!--Grid column-->
            <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                <h5 class="text-uppercase mb-4">LINK IN</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="../faq.php#contactUs" class="text-black">Contact us</a>
                    </li>
                    <li>
                        <a href="../shop.php" class="text-black">Skincare base on category</a>
                    </li>
                    <li>
                        <a href="../brand.php" class="text-black">Skincare base on brand</a>
                    </li>
                    <li>
                        <a href="../account/login.php" class="text-black">Login</a>
                    </li>
                    <li>
                        <a href="../account/register.php" class="text-black">Sign In</a>
                    </li>
                </ul>
            </section>
            <!--Grid column-->

            <!--Grid column-->
            <section class="col-lg-4 col-md-4 mb-3 mb-lg-0">
                <form action="../action3.php" method="POST" id="form-reset">
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
                <img class="cap" style="height: 100px;" src="../atribut/payment method/bca.png" alt="bca">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/bni.png" alt="bni">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/linebank.png" alt="line bank">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/dana.png" alt="dana">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/gopay.png" alt="gopay">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/ovo.png" alt="ovo">
            </section>
            <section class="col">
                <img class="cap" style="height: 100px;" src="../atribut/payment method/shopeepay.png" alt="shopeepay">
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
    <!-- Copyright -->

    <!-- script newsletter -->
    <script>
        $("form#form-reset").submit(function(event) {
            event.preventDefault(); // mencegah form untuk submit secara bawaan

            // mengambil data dari form
            var formData = $("form").serialize();

            // mengirimkan data ke server menggunakan AJAX
            $.ajax({
                url: "../action3.php",
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