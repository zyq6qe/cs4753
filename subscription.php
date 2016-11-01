<?php

include "base.php";
include('apiCallsData.php');
include('paypalConfig.php');

?>

<form id="myContainer" action="startPayment.php" method="POST">
<input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']);?>"/>
Camera:<input type="text" name="camera_amount" value="300" readonly></input><br>
Tax:<input type="text" name="tax" value="5" readonly></input><br>
Insurance:<input type="text" name="insurance" value="10" readonly></input><br>
Handling:<input type="text" name="handling_fee" value="5" readonly></input><br>
Est. Shipping:<input type="text" name="estimated_shipping" value="2" readonly></input><br>
Shipping Discount:<input type="text" name="shipping_discount" value="-2" readonly></input><br>
Total:<input type="text" name="total_amount" value="100" readonly></input><br>
Currency:<input type="text" name="currencyCodeType" value="USD" readonly></input><br>
</form>

<script type="text/javascript">
    window.paypalCheckoutReady = function () {
        paypal.checkout.setup('Your merchant id', {
            container: 'myContainer', //{String|HTMLElement|Array} where you want the PayPal button to reside
            environment: 'sandbox' //or 'production' depending on your environment
        });
    };
</script>
<script src="//www.paypalobjects.com/api/checkout.js" async></script>