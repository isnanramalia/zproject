<!-- untuk menampilkan list product di shop.php -->
<?php
while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_price = $row['product_price'];
    $product_image = $row['product_image'];
    $product_code = $row['product_code'];
    $product_berat = $row['product_berat'];
    $product_stock = $row['product_stock'];
?>
    <section class="card col-lg-4 col-md-6 mb-4">
        <form class="form-submit">
            <input type="hidden" class="pid" value="<?php echo $product_id ?>">
            <input type="hidden" class="pname" value="<?php echo $product_name ?>">
            <input type="hidden" class="pprice" value="<?php echo $product_price ?>">
            <input type="hidden" class="pimage" value="<?php echo $product_image ?>">
            <input type="hidden" class="pcode" value="<?php echo $product_code ?>">
            <input type="hidden" class="pberat" value="<?php echo $product_berat ?>">
            <input type="hidden" class="pstock" value="<?php echo $product_stock ?>">
            <div class="card-body">
                <img class="card-img-top" src="images/<?php echo $product_image ?>" alt="products">
                <h2 class="card-title"><?php echo $product_name ?></h2>
                <p class="card-title"><?php echo $product_berat ?> ml <b>|</b> stock <?php echo $product_stock ?></p>
                <p class="card-text price">IDR <?php echo number_format($product_price, 2) ?></p>
                <button id="addItem" class="btn btn-block">Add to Cart</button>
            </div>
        </form>
    </section>
<?php
}
