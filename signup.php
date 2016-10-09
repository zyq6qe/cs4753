<?php
require "config.php";

$firstnameErr = $lastnameErr = $emailErr = $addrErr = $cityErr = $stateErr = $zipErr = "";
$firstname = $lastname = $email = $addr = $city = $state = $zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = $_POST["firstname"];
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastname = $_POST["lastname"];
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["address"])) {
        $addrErr = "Address is required";
    } else {
        $addr = $_POST["address"];
    }
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $stateErr = "State is required";
    } else {
        $state = $_POST["state"];
    }
    if (empty($_POST["zipcode"])) {
        $zipErr = "Zip code is required";
    } else {
        $zip = $_POST["zipcode"];
    }
}

$db->query("insert into Users values('$email', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')") or die ("Invalid query ".$db->error);
?>