<?php

function component($productname, $productprice, $productimg)
{
    $element = "

<section class=\"card col-2\" style=\"margin: 10px; padding: 10px; display: inline-block;\">
    <form action=\"index.php\" method=\"post\">
        <img class=\"card-img-top\" src=\"$productimg\" alt=\"products\">
        <section class=\"card-body\">
            <h2 class=\"card-title\">$productname</h2>
            <p class=\"card-text price\">IDR $productprice</p>
            <button class=\"btn btn-block\" type=\"submit\" name=\"add\">Add to Cart</button>
        </section>
        <!-- End of Card Deck Layout -->
    </form>
</section>

    ";
    echo $element;
}
