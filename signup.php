<?php
require "config.php";

$firstname = $lastname = $email = $addr = $city = $state = $zip = '';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$addr = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];

$db->query("insert into Users values('$email', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')") or die ('Invalid query '.$db->error);
?>

You have been registered!
<p></p>