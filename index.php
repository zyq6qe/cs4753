<?php

include "base.php";

if (isset($_SESSION['logged'])) {
    header( 'Location: memberindex.php' ) ;
}

?>
<!--header-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
        });
    });
</script>


<ul class="rslides" id="slider">
    <li>
        <div class="banner1">
            <div class="banner-info">
                <h3>Select your succulent</h3>
                <p>Succulents will add a unique and personal touch to any room! Sign up for a subscription to bring home
                    plants every month that will instantly make any place feel more like home.</p>
            </div>
        </div>
    </li>
    <li>
        <div class="banner2">
            <div class="banner-info">
                <h3>Build your own custom terrarium</h3>
                <p>We’ll provide the supplies. Get a variety of unique and vibrant succulents and supplies each month!
                    Find something that's right for your home!</p>
            </div>
        </div>
    </li>
    <li>
        <div class="banner3">
            <div class="banner-info">
                <h3>Care for your succulent</h3>
                <p>Succulents are super low maintenance and easy to take care of. With the Care4You package that comes with
                    each monthly box, you can always give your buddy the right amount of love!</p>
            </div>
        </div>
    </li>
</ul>

<div id="footer"></div>


<!---->
<script src="js/bootstrap.js"></script>
