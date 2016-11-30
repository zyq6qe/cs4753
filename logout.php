<?php
include "base.php";
if ($_SESSION['logged']) {
    unset($_SESSION['logged']);
    unset($_SESSION['started']);
    unset($_SESSION['username']);
    $_SESSION['logged'] = "false";
    session_destroy();
    header('Location: index.php');
}
?>
