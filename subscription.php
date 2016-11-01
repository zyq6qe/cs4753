<?php

include "base.php";

include('apiCallsData.php');
include('paypalConfig.php');

if (session_id() == "")
    session_start();

?>

<div class="container">
    <br></br>
    <h3>Select your subscription plan:</h3> <br/>
    <form id="myContainer" action="startPayment.php" method="POST">
        <input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']); ?>"/>
        <select id="paypd" name="paypd" class="form-control" style="width: 100px; display: inline-block;">
            <option value="" disabled selected>Select payment frequency:</option>
            <option value="30">Monthly</option>
            <option value="300">Annually</option>
        </select>
        <p style="font-size: 24px; display: inline-block; margin-left: 30px">$</p><input type="text" name="my_amount"
                                                                                         class="form-control form-control-custom"
                                                                                         id="pay" value="30"
                                                                                         style="width: 100px; display: inline-block; margin-left: 10px"
                                                                                         readonly></input><br/><br/>
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
    $(document).ready(function () {

        $("#paypd option").filter(function () {
            return $(this).val() == $("#pay").val();
        }).attr('selected', true);


        $("#paypd").live("change", function () {

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