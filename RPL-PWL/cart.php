<?php
session_start();

// // Memeriksa apakah pengguna sudah login atau belum
// if (!isset($_SESSION['user_id'])) {
//     // Pengguna belum login, atur keranjang bernilai 0
//     $_SESSION['cart'] = 0;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>cart - skinker</title>
</head>


<body style="margin-top: 50px; padding-top: 50px;">
    <header>
        <?php
        require_once('php/header.php');
        ?>
    </header>

    <!-- utk menampilkan pop-up alert -->
    <section style="display:<?php if (isset($_SESSION["showAlert"])) {
                                echo $_SESSION["showAlert"];
                            } else {
                                echo "none";
                            }
                            unset($_SESSION["showAlert"]) ?>" class="alert alert-success alert-dismissible mt-2">

        <button type="button" class="close" data-dismiss="alert">&times;</button>

        <strong><?php if (isset($_SESSION["message"])) {
                    echo $_SESSION["message"];
                }
                unset($_SESSION["showAlert"]); ?></strong>
    </section>

    <section class="container">
        <section class="row">
            <section class="col-12">
                <section class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Total Price</th>
                                <th scope="col" class="text-right">
                                    <a href="action.php?clear=all" onClick="return confirm('Are you sure to clear you cart?');" class="btn btn-sm btn-danger">Empty Cart</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once "dbconfig.php";
                            $select_stmt = $db->prepare("SELECT * FROM cart");
                            $select_stmt->execute();
                            $grand_total = 0;
                            while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <tr>
                                    <td><img src="images/<?php echo $row["product_image"]; ?>" width="50" height="50" /> </td>

                                    <td><?php echo $row["product_name"]; ?></td>

                                    <td><?php echo number_format($row["product_price"], 2); ?></td>

                                    <td><input type="number" class="form-control itemQty" value="<?php echo $row['quantity']; ?>" style="width:75px;"></td>

                                    <td class="text-right"><?php echo number_format($row["total_price"], 2); ?></td>

                                    <td class="text-right">
                                        <a href="action.php?remove=<?php echo $row["cart_id"]; ?>" onClick="return confirm('Are you sure want to remove this item?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>

                                    <input type="hidden" class="pid" value="<?php echo $row["cart_id"]; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $row["product_price"]; ?>">

                                    <?php $grand_total += $row["total_price"]; ?>
                                </tr>
                            <?php
                            }
                            ?>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-right"><?php echo number_format($grand_total, 2); ?></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong><?php echo number_format($grand_total, 2); ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </section>
            <section class="col mb-2">
                <section class="row">
                    <section class="col-sm-12  col-md-6">
                        <a href="shop.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
                    </section>
                    <section class="col-sm-12 col-md-6 text-right">
                        <a href="checkout.php" class="btn btn-md btn-block btn-success text-uppercase <?= ($grand_total > 1) ? "" : "disabled"; ?>"> Checkout </a>
                    </section>
                </section>
            </section>
        </section>

    </section>

    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('php/footer.php') ?>
    </footer>

    <script type="text/javascript">
        $(document).ready(function() {

            $(".itemQty").on("change", function() {

                var hide = $(this).closest("tr");

                var id = hide.find(".pid").val();
                var price = hide.find(".pprice").val();
                var qty = hide.find(".itemQty").val();
                location.reload(true);
                $.ajax({
                    url: "action.php",
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
                    url: "action.php",
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



</body>

</html>