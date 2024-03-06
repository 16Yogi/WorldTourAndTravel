<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('Asset/head.php');
    ?>
</head>
<body>
    <?php
        include('headder.php');
        include('banner.php');
        include('about.php');       
    ?>
    <div class="container-fluid p-0" id="service-container-fluid">
        <div class="container p-0" id="service-container">
            <div class="mainService">
                <div class="childService">
                    <h2>Service</h2>
                    <div class="wrapService">
                        <div class="itemService">
                            <!-- search bar -->     
                            <div class="serBar">
                                <div class="serBara">
                                   <i class="fa-solid fa-magnifying-glass"></i>
                                   <input type="search" name="" placeholder="Contry">
                                   <input type="search" name="" placeholder="City">
                                </div>
                                <div class="serBara">
                                   <div class="serA">
                                       <span>Check in</span>
                                       <input type="date">  
                                   </div>
                                   <div class="serA">
                                       <span>Check Out</span>
                                       <input type="date">
                                   </div> 
                                </div>
                                <div class="serBara">
                                    <span>Room:</span>
                                    <input type="number" placeholder="Room">
                                    <input type="button" name="search" value="search" id="serbtn">
                                    <!-- <button>Search</button> -->
                                </div>
                                <!-- <div class="serBara"></div> -->
                            </div> 
                            <br><br>
                            <h3>Vehicle Service</h3>
                            <div class="wrapperService">
                                <div class="servicea" style="background-image:url('IMG/service/<?php echo $vh1img; ?>')">
                                    <div class="textService">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.eum.</p>
                                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.eum.</p> -->
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                                <div class="servicea" style="background-image:url('IMG/service/<?php echo $vh2img; ?>')">
                                    <div class="textService">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.eum.</p>
                                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p> -->
                                        <button><a href="payment.php">Book Now</a></button>

                                    </div>
                                </div>
                                <div class="servicea" style="background-image:url('IMG/service/<?php echo $vh3img; ?>')">
                                    <div class="textService">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.eum.</p>
                                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p> -->
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                                <div class="servicea" style="background-image:url('IMG/service/<?php echo $vh4img; ?>')">
                                    <div class="textService">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.eum.</p>
                                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p> -->
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="itemService">
                            <h3>Hotel Service</h3>
                            <div class="wrapperService">
                                <div class="servicea" id="servicea" style="background-image:url('IMG/service/<?php echo $hs1img; ?>')">
                                    <div class="textService" id="textServicea">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p>
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                                <div class="servicea" id="servicea" style="background-image:url('IMG/service/<?php echo $hs2img; ?>')">
                                    <div class="textService" id="textServicea">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p>
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                                <div class="servicea" id="servicea" style="background-image:url('IMG/service/<?php echo $hs3img; ?>')">
                                    <div class="textService" id="textServicea">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, quas! Quis, eveniet? Eius, unde eum.</p>
                                        <button><a href="payment.php">Book Now</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====================== START MAP ==================== -->
        <div class="itemService" id="map">
            <!-- <h4>Map</h4> -->
            <div class="wrapperService">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112081.43880477817!2d77.09257866434888!3d28.613424804705925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0324af244d31%3A0x7a1d1ee30ec5f5bf!2sPalm%20Spring%20a%20Boutique%20Hotel%20-%20Local%20ID%20Allowed!5e0!3m2!1sen!2sin!4v1667559546486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- ====================== end MAP ==================== --> 
    </div>
    <?php
        include('footer.php');
    ?>
</body>
</html>