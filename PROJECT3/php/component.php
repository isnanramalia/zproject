<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "

<section class=\"card col-2\" style=\"margin: 10px; padding: 10px; display: inline-block;\">
    <form action=\"shop.php\" method=\"post\">
        <img class=\"card-img-top\" src=\"$productimg\" alt=\"products\">
        <section class=\"card-body\">
            <h2 class=\"card-title\">$productname</h2>
            <p class=\"card-text price\">IDR $productprice</p>
            <button class=\"btn btn-block\" type=\"submit\" name=\"add\" onclick=\"addToCart($productid)\">Add to Cart</button>
            <input type=\"hidden\" name=\"product_id\" value='$productid'>
        </section>
    </form>
</section>

    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
