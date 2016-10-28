<?php
include "base.php";
?>

<div class="container">
    <br/><br/>


<?php
require "config.php";

$firstname = $lastname = $email = $addr = $city = $state = $zip = '';
$feedback = '';

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $addr = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
}

try {
    $db->query("insert into Users values('$email', '$firstname', '$lastname', '$addr', '$city', '$state', '$zip')");
    $feedback = 'Thanks for registering!';
    echo '<p id="feedback">' . $feedback . '</p>';
} catch (Exception $e) {
    die();
}


?>
    <br/>
    <p id="mybutton" class="btn btn-primary"><a href="signup.html">Back to home</a></p>


</div>