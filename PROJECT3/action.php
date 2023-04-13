
<?php
session_start();
require_once "dbconfig.php";

if (isset($_POST["pid"]) && isset($_POST["pname"]) && isset($_POST["pprice"]) && isset($_POST["pimage"]) && isset($_POST["pcode"])) {
    $id    = $_POST["pid"];
    $name     = $_POST["pname"];
    $price     = $_POST["pprice"];
    $image     = $_POST["pimage"];
    $code     = $_POST["pcode"];
    $qty = 1;

    $select_stmt = $db->prepare("SELECT product_code FROM cart WHERE product_code=:code");
    $select_stmt->execute(array(":code" => $code));
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

    $check_code = $row["product_code"];

    if (!$check_code) {
        $insert_stmt = $db->prepare("INSERT INTO cart(product_name,
                                                        product_price,
                                                        product_image, 
                                                        quantity,
                                                        total_price,
                                                        product_code) 
                                                    VALUES
                                                        (:name,
                                                        :price,
                                                        :image,
                                                        :qty,
                                                        :ttl_price,
                                                        :code)");
        $insert_stmt->bindParam(":name", $name);
        $insert_stmt->bindParam(":price", $price);
        $insert_stmt->bindParam(":image", $image);
        $insert_stmt->bindParam(":qty", $qty);
        $insert_stmt->bindParam(":ttl_price", $price);
        $insert_stmt->bindParam(":code", $code);
        $insert_stmt->execute();

        echo '<div class="alert alert-success alert-dismissible mt-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Item added to your cart</strong> 
                  </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible mt-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Item already added to your cart!</strong> 
                  </div>';
    }
}

if (isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart_item") {
    $select_stmt = $db->prepare("SELECT * FROM cart");
    $select_stmt->execute();
    $row = $select_stmt->rowCount();
    echo $row;
}
