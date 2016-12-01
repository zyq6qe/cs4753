<?php
include "base.php";

if (!isset($_SESSION['logged'])) {
    header( 'Location: index.php' ) ;
}


?>


<ul class="rslides" id="slider">
    <li>
        <div class="banner4">
            <div class="banner-info" id="banner-info-mine">
                <h3>Check out this month's</h3>
                <h3>succulent box</h3>
            </div>
        </div>
    </li>
</ul>

<div class="container">
    <br/><br/><br/>
    <div id="tab-header"><h3>Check out some of our previous month's boxes!</h3></div>
    <br/>

    <ul class="tab">
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab1')">October</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab2')">September</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab3')">August</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab4')">July</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tab5')">June</a></li>
    </ul>
    <br/>

    <div id="tab1" class="tabcontent">
        <h3>October</h3>
        <br/>
        <img src="images/img1.jpg" width="400px">
    </div>

    <div id="tab2" class="tabcontent">
        <h3>September</h3>
        <br/>
        <img src="images/img2.jpg" width="400px">
    </div>

    <div id="tab3" class="tabcontent">
        <h3>August</h3>
        <br/>
        <img src="images/img3.jpg" width="400px">
    </div>

    <div id="tab4" class="tabcontent">
        <h3>July</h3>
        <br/>
        <img src="images/img4.jpg" width="400px">
    </div>

    <div id="tab5" class="tabcontent">
        <h3>June</h3>
        <br/>
        <img src="images/img5.jpg" width="400px">
    </div>
    <br/><br/><br/>
</div>

<div id="footer"></div>


<!---->
<script src="js/bootstrap.js"></script>
<script>
    function openCity(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
