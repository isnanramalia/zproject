<!-- link bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- link css -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
<header>
    <a href="index.php" class="logo"><span>SKINKER</span></a>
    <nav>
        <ul class="navbar">
            <li><a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                                        echo ' class="active"';
                                    } ?>>HOME</a></li>
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