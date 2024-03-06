<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('Asset/head.php');
    ?>
</head>
<body>
    <div class="container-fluid" id="container-fluid-pay">
        <div class="container" id="container-pay">
            <div class="mainPay">
                <div class="childPay">
                    <div class="wrapPay">
                        <!--  -->
                        <div class="pay">
                            <h3>Welcome to World TP</h3>
                            <hr>
                            <div class="pay-a">
                                <!-- card section -->
                                <div class="cardSelect">
                                    <span>Pay with Credit Card:</span>
                                    <input type="radio">
                                    <span>Pay with Debit Card:</span>
                                    <input type="radio">
                                </div>
                                <div class="payarea">
                                    <p>Name</p>
                                    <input type="text" name="" placeholder="Name of Owner">
                                    <p>Card Number</p>
                                    <input type="text" name="" placeholder="----/----/----/----">
                                </div>
                                <div class="payarea" id="payareaa">
                                    <div class="payarea-a">
                                        <span>CVV:</span>
                                        <input type="text" name="" placeholder="000">
                                    </div>
                                    <div class="payarea-a">
                                        <span>Exp Date:</span>
                                        <input type="text" name="" placeholder="--/--">
                                    </div>
                                </div>
                                <div class="paybtn">
                                    <div class="paybtn-a">
                                        <span>OTP:</span>
                                        <input type="text" name="" placeholder="OTP">
                                    </div>
                                    <div class="paybtn-a">
                                        <button>SUBMIT</button>
                                        <!-- <input type="submit" name="" placeholder="SUBMIT" value="SUBMIT" id="pybtn"> -->
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>