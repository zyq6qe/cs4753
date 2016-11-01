<?php
    /*
        * Cancel Order page
    */

    if (session_id() == "")
        session_start();

    include "base.php";

?>
<div class="container">
    <br></br>
    <h4>
        You cancelled the order.
    </h4>
    <br/>
    <p id="mybutton" class="btn btn-primary"><a href="subscription.php">Try again</a></p>
</div>