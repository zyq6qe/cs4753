<?php
include "base.php";
?>

<div class="container">
    <br/><br/>


<?php
require "config.php";

$firstname = $lastname = $email = $password = $addr = $city = $state = $zip = '';
$cardnum = $expmonth = $expyear = $cvv = '';
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
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

$_SESSION['email'] = $email;


try {
    $db->query("insert into Users values('$email', '$password', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')");
    $db->query("insert into Payment values('$email', '$cardnum', '$expmonth', '$expyear', '$cvv')");
    header('Location: subscription.php');

} catch (Exception $e) {
    $feedback = 'Error in registration. Please try again!';
    echo '<p id="feedback">' . $feedback . '</p>';
    die();
}



?>


</div>