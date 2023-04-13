<?php
session_start();
require_once "dbconfig.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>cart - skinker</title>

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

                $.ajax({
                    url: "action.php",
                    method: "post",
                    data: {
                        pid: id,
                        pname: name,
                        pprice: price,
                        pimage: image,
                        pcode: code
                    },
                    success: function(response) {
                        $(".alert-message").html(response);
                        window.scrollTo(0, 0);
                        load_cart_item_number();
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
</head>


<body style="margin-top: 50px; padding-top: 50px;">
    <?php
    require_once('php/header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
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
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="shop.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="checkout.php" class="btn btn-md btn-block btn-success text-uppercase <?= ($grand_total > 1) ? "" : "disabled"; ?>"> Checkout </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>