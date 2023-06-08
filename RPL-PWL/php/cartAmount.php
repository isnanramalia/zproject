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