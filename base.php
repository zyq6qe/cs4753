<html>
<head>
    <title>Succs4You</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/succs.css" rel="stylesheet" type="text/css" media="all" />

    <script src="js/jquery.min.js"></script>

    <!--//theme style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start menu -->
    <script src="js/simpleCart.min.js"> </script>
    <!-- start menu -->
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!-- /start menu -->
</head>

<body>

<div id="spacing"></div>

<!--<div class="header-top">-->
<!--    <div class="header-bottom">-->
<!--        <div class="logo">-->
<!--            <h1><a href="index.php">Succs4You</a></h1>-->
<!--        </div>-->
<!--        <!---->
<!--        <div class="top-nav">-->
<!--            <ul class="memenu skyblue">-->
<!--                <li class="grid"><a href="index.php">Home</a></li>-->
<!--                <li class="grid"><a href="about.php">About Us</a></li>-->
<!--                <li class="grid"><a href="signup.php">Sign Up</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clearfix"> </div>-->
<!--</div>-->



<div id="myheader">
    <div id="mylogo">
        <a href="index.php">Succs4You</a>
    </div>
    <div id="mynavleft">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </div>
    <div id="mynavright">
        <ul>
            <?php
            if (session_id() == "")
                session_start();

            if(!isset($_SESSION['logged'])) {
            ?>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Log In</a></li>
            <?php
            } else {
            ?>
            <li><a href="logout.php">Log Out</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>

<!---->
<script src="js/bootstrap.js"> </script>

<!---->