<?php
    include 'header.php';
?>

<!--  about-page -->
<div class="about" style="background-color: #ffffff">
    <div class="container">
        <div class="col-xs-12" style="margin-bottom: 20px; margin: 0 auto ; margin-bottom: 20px;">
            <img src="images/tick.png" width="100px;" class="img-responsive" style="margin: 0 auto;">
        </div>
        <div class="col-xs-12">
            <h3 class="w3ls-title w3ls-title1">Sevgili Mehmet Acar</h3>
        </div>
        <div class="about-text">
            <div class="col-xs-12">
                <p class="text-center">Garsonumuz kısa süre içinde sizinle ilgilenecektir.</p>

            </div>
        </div>
    </div>
</div>
<!-- //about-page -->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- menu js aim -->
<script src="js/jquery.menu-aim.js"> </script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<!-- //menu js aim -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>
