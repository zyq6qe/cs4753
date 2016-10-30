<?php
include "base.php";
if($_SESSION['logged']) {
    unset($_SESSION['logged']);
    unset($_SESSION['started']);
    unset($_SESSION['username']);
    $_SESSION['logged'] = "false";
    session_destroy();
}
?>
<div class="container">
    <br/><br/>
    <p>You have been logged out.</p><br/>
    <p id="mybutton" class="btn btn-primary"><a href="index.php">Back to home</a></p>
</div>
