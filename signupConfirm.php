<?php


include "base.php";

if (session_id() == "")
    session_start();
?>

<div class="container">
    <br/><br/>


    <?php
    require "config.php";

    $firstname = $lastname = $email = $password = $addr = $city = $state = $zip = '';
    $cardnum = $expdate = $cvv = '';
    $feedback = '';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $addr = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
    $cardnum = $_POST['cardnum'];
    $expdate = $_POST['expdate'];
    $cvv = $_POST['cvv'];

    $_SESSION['myemail'] = $email;

    try {
        $db->query("insert into Users values('$email', '$password', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')");
        $db->query("insert into Payment values('$email', '$cardnum', '$expdate', '$cvv')");
        header('Location: subscription.php');

    } catch (Exception $e) {
        $feedback = 'Error in registration. Please try again!';
        echo '<p id="feedback">' . $feedback . '</p>';
        die();
    }


    ?>


</div>