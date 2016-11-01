<?php
include "base.php";
?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["started"] = 1;
$email = trim($_POST['email']);
$pass = trim($_POST['password']);

require "config.php";

$query = "SELECT * FROM Users WHERE email = '" . $email . "' and password = '" . $pass . "'";

$num_rows = 0;

if ($result = $db->query($query, MYSQLI_USE_RESULT)) {
    $num_rows = $result->num_rows; //zero
    while ($row = $result->fetch_row()) {
        $num_rows = $result->num_rows; //incrementing by one each time
    }
    $num_rows = $result->num_rows; // Finally the total count
}

if ($num_rows == 1) {
    $_SESSION['logged'] = 1;
    $_SESSION['email'] = $_POST['email'];
    header('Location: index.php');
} else { ?>

    <div class="container">
        <br/><br/>
        <p>Invalid email or password.</p><br/>
        <p id="mybutton" class="btn btn-primary"><a href="login.php">Try again</a></p>
    </div>
    <?php
}


?>
