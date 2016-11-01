<?php

include "base.php";
include('apiCallsData.php');
include('paypalConfig.php');

?>
<div class="container">
    <br></br>
<!--<form id="myContainer" action="startPayment.php" method="POST">-->
<!--    <div class="row">-->
<!--        <select id="paypd" name="paypd">-->
<!--            <option value="" disabled selected>Select payment frequency:</option>-->
<!--            <option value="$30">Monthly</option>-->
<!--            <option value="$300">Annually</option>-->
<!--        </select>-->
<!---->
<!--        <input type="text" id="pay" name="pay" value=" " readonly="readonly">-->
<!--    </div>-->
<!--</form>-->
    <form id="myContainer" action="startPayment.php" method="POST">
        <input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']);?>"/>
        <select id="paypd" name="paypd">
            <option value="" disabled selected>Select payment frequency:</option>
            <option value="30">Monthly</option>
            <option value="300">Annually</option>
        </select><br/><br/>
        Amount: $<input type="text" name="my_amount" id="pay" value="30" readonly></input><br/><br/>
        <input type="hidden" name="tax" value="0" readonly></input>
        <input type="hidden" name="insurance" value="0" readonly></input>
        <input type="hidden" name="handling_fee" value="0" readonly></input>
        <input type="hidden" name="estimated_shipping" value="0" readonly></input>
        <input type="hidden" name="shipping_discount" value="0" readonly></input>
        <input type="hidden" name="total_amount" value="0" readonly></input>
        <input type="hidden" name="currencyCodeType" value="USD" readonly></input>
    </form>
</div>
<script>
    $(document).ready(function() {

        $("#paypd option").filter(function() {
            return $(this).val() == $("#pay").val();
        }).attr('selected', true);



        $("#paypd").live("change", function() {

            $("#pay").val($(this).find("option:selected").attr("value"));
        });
    });

</script>
<script type="text/javascript">
    window.paypalCheckoutReady = function () {
        paypal.checkout.setup('Your merchant id', {
            container: 'myContainer', //{String|HTMLElement|Array} where you want the PayPal button to reside
            environment: 'sandbox' //or 'production' depending on your environment
        });
    };
</script>
<script src="//www.paypalobjects.com/api/checkout.js" async></script>