<!-- nambah item ke keranjang scr dinamis -->
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