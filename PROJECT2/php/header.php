<header>
    <a href="index.php" class="logo" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                                            echo ' class="active"';
                                        } ?>><span>SKINKER</span></a>
    <nav>
        <ul class="navbar">
            <li><a href="shop.php" <?php if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
                                        echo ' class="active"';
                                    } ?>>SHOP</a></li>
            <li><a href="brand.php" <?php if (basename($_SERVER['PHP_SELF']) == 'brand.php') {
                                        echo ' class="active"';
                                    } ?>>BRANDS</a></li>
            <li><a href="offers.php" <?php if (basename($_SERVER['PHP_SELF']) == 'offers.php') {
                                            echo ' class="active"';
                                        } ?>>OFFERS</a></li>
            <li><a href="faq.php" <?php if (basename($_SERVER['PHP_SELF']) == 'faq.php') {
                                        echo ' class="active"';
                                    } ?>>F.A.Q.</a></li>
            <li><a href="tipsNadvice.php" <?php if (basename($_SERVER['PHP_SELF']) == 'tipsNadvice.php') {
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
        <a href="account/login.html" <?php if (basename($_SERVER['PHP_SELF']) == 'account/login.html') {
                                            echo ' class="active"';
                                        } ?>>ACCOUNT <i class="ri-user-fill"></i></a>
        <a href="cart.php" <?php if (basename($_SERVER['PHP_SELF']) == 'cart.php') {
                                echo ' class="active"';
                            } ?>>CART <i class="bi bi-bag"></i>
            <?php

            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                echo "<span id=\"cart_count\" class=\"text-black\">$count</span>";
            } else {
                echo "<span id=\"cart_count\" class=\"text-black\">0</span>";
            }

            ?></a>
        <section class="bx bx-menu" id="menu-icon"></section>
    </section>
</header>