<?php
include "base.php";
?>

<div class="container">
    <br/><br/>
    <h1>Log In</h1>
    <div class="section group" id="login">
        <br>
        <form action="loginConfirm.php" method="POST">
            Email: <input type="text" name="email" autocomplete="off" class="form-control" style="width:400px"><br>
            Password: <input type="password" name="password" autocomplete="off" class="form-control"
                             style="width:400px">
            <br>
            <input type="submit" id="mybutton" class="btn btn-primary">
        </form>
        <br/>
    </div>
</div>


<?php

?>
