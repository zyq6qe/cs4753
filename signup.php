<?php
include "base.php";
?>


<div class="container">
    <br/><br/>
    <!--start contact-->
    <h3>Sign Up</h3>
    <div class="section group" id="signup">
        <form action="signupConfirm.php" method="post">
            <div class="panel-group"> 
                <div class="panel panel-default"> 
                    <div class="panel-heading panel-heading-custom">
                        <h3 class="panel-title" id="mypaneltitle">Personal Information</h3>
                    </div> 
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First name:</label>
                                <input class="form-control" placeholder="Enter your first name" type="text" name="firstname" pattern="^[a-zA-Z][a-zA-Z]+$" required>
                                <br/>
                                <label>Last name:</label>
                                <input class="form-control" placeholder="Enter your last name" type="text" name="lastname" pattern="^[a-zA-Z][a-zA-Z]+$" required>
                                <br/>
                                <label>Email:</label>
                                <input class="form-control" placeholder="Enter your email" type="text" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                                <br/>
                                <label>Password:</label>
                                <input class="form-control" placeholder="Enter your password" type="password" name="password" pattern="^[a-zA-Z0-9@$!%*#?&]*$" required>
                            </div>
                            <div class="col-md-6">
                                <label>Address:</label>
                                <input class="form-control" placeholder="Enter your address" type="text" name="address" required pattern="\d{1,3}.?\d{0,3}\s[a-zA-Z]{2,30}\s[a-zA-Z]{2,30}(\s[a-zA-Z]{2,30})?">
                                <br/>
                                <label>City:</label>
                                <input class="form-control" placeholder="Enter your city" type="text" name="city" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$" required>
                                <br/>
                                <label>State:</label>
                                <!--<input class="form-control" placeholder="Enter your state" type="text" name="state" pattern="^((A[LKZR])|(C[AOT])|(D[EC])|(FL)|(GA)|(HI)|(I[DLNA])|(K[SY])|(LA)|(M[EDAINSOT])|(N[EVHJMYCD])|(O[HKR])|(PA)|(RI)|(S[CD])|(T[NX])|(UT)|(V[TA])|(W[AVIY]))$" required>-->
                                <select class="form-control" name="state" required>
                                    <option value="" disabled selected>Select your state</option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                                <br/>
                                <label>Zip Code:</label>
                                <input class="form-control" placeholder="Enter your zip code" type="text" name="zipcode" pattern="^\d{5}(?:[-\s]\d{4})?$" required>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

                <br/>
            <div class="panel panel-default"> 
                <div class="panel-heading panel-heading-custom">
                    <h3 class="panel-title" id="mypaneltitle">Banking Information</h3>
                </div> 
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>Credit Card Number:</label>
                            <input class="form-control" placeholder="Enter your card number (no dashes or spaces)" type="text" name="cardnum" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$" required>
                            <br/>
                        </div>
                        <div class="col-sm-3">
                            <label>Expiration Date:</label>
                            <input class="form-control" type="month" name="expdate" min="2016-12"required>
                            </input>
                        </div>
                        <div class="col-sm-3">
                            <label>CVV:</label>
                            <input class="form-control" placeholder="Enter CVV" type="text" name="cvv" pattern="^[0-9]{3,4}$" required>
                            <br/>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <input type="submit" id="mybutton" class="btn btn-primary">
        </form>
        <br/>


    </div>

</div>
