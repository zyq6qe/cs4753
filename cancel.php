<?php
    /*
        * Cancel Order page
    */

include "base.php";

if (session_id() == "")
        session_start();
?>
    <div class="container">
        <br/><br/>
        <h4>
            You cancelled the order.
        </h4>
        <br/>
        <p id="mybutton" class="btn btn-primary"><a href="index.php">Back to home</a></p>
    </div>