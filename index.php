<?php
include "base.php";
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


<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li>
                <div class="banner1">
                    <div class="banner-info">
                        <h3>Select your succulent</h3>
                        <p>Succulents will add a unique and personal touch to any room! Bring home our Plant Variety Pack and instantly make any place feel more like home.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2">
                    <div class="banner-info">
                        <h3>Build your own custom terrarium</h3>
                        <p>We’ll provide the supplies. Choose from hundreds of options to create a terrarium that’s right for you.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner3">
                    <div class="banner-info">
                        <h3>Care for your succulent</h3>
                        <p>Succulents are super low maintenance and easy to take care of. With our Care4You package, you can always give your buddy the right amount of love!</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>


<!---->
<script src="js/bootstrap.js"> </script>
