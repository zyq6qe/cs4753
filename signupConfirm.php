<?php
include "base.php";
?>

<div class="container">
    <br/><br/>


<?php
require "config.php";

$firstname = $lastname = $email = $password = $addr = $city = $state = $zip = '';
$feedback = '';

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $addr = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
}

try {
    $db->query("insert into Users values('$email', '$password', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')");
    $feedback = 'Thanks for registering!';
} catch (Exception $e) {
    $feedback = 'Error in registration. Please try again!';
    die();
}

echo '<p id="feedback">' . $feedback . '</p>';

?>
    <br/>
    <p id="mybutton" class="btn btn-primary"><a href="index.php">Back to home</a></p>


</div>