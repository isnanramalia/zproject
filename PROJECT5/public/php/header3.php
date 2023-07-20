<a href="../index.php" class="logo" <?php if (basename($_SERVER['PHP_SELF']) == '../index.php') {
                                        echo ' class="active"';
                                    } ?>><span>SKINKER</span></a>
<nav>
    <ul class="navbar">
        <li><a href="../shop.php" <?php if (basename($_SERVER['PHP_SELF']) == '../shop.php') {
                                        echo ' class="active"';
                                    } ?>>SHOP</a></li>
        <li><a href="../brand.php" <?php if (basename($_SERVER['PHP_SELF']) == '../brand.php') {
                                        echo ' class="active"';
                                    } ?>>BRANDS</a></li>
        <li><a href="../offers.php" <?php if (basename($_SERVER['PHP_SELF']) == '../offers.php') {
                                        echo ' class="active"';
                                    } ?>>OFFERS</a></li>
        <li><a href="../faq.php" <?php if (basename($_SERVER['PHP_SELF']) == '../faq.php') {
                                        echo ' class="active"';
                                    } ?>>F.A.Q.</a></li>
        <li><a href="../tipsNadvice.php" <?php if (basename($_SERVER['PHP_SELF']) == '../tipsNadvice.php') {
                                                echo ' class="active"';
                                            } ?>>TIPS & ADVICE</a></li>
    </ul>
</nav>
<section class="main">
    <a href="#" <?php if (basename($_SERVER['PHP_SELF']) == '#') {
                    echo ' class="active"';
                } ?>><i class="bi bi-search"></i></a>
    <a href="#" <?php if (basename($_SERVER['PHP_SELF']) == '#') {
                    echo ' class="active"';
                } ?>><b>|</b></a>
    <?php
    $active_pages = ['login.php', 'register.php'];
    $current_page = basename($_SERVER['PHP_SELF']);

    echo '<a href="login.php"';
    if (in_array($current_page, $active_pages)) {
        echo ' class="active"';
    }
    echo '>ACCOUNT <i class="ri-user-fill"></i></a>';
    ?>
    <a href="../cart.php" <?php if (basename($_SERVER['PHP_SELF']) == '../cart.php') {
                                echo ' class="active"';
                            } ?>>CART <i class="bi bi-bag"></i>&nbsp&nbsp<span id="cart-item"></span></a>
    <?php

    if (isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart_item") {
        $select_stmt = $db->prepare("SELECT * FROM cart");
        $select_stmt->execute();
        $row = $select_stmt->rowCount();
        echo $row;
    }

    ?></a>
    <section class="bx bx-menu" id="menu-icon"></section>
</section>