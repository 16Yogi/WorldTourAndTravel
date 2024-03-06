<!DOCTYPE html>
<html lang="en">
<head>
   <?php
       include('asset/head.php');
    //    include('fetchlog.php');
    //    include('');
   ?>
</head>
<body>
    <div class="container-fluid P-0" id="headder-container-fluid">
        <div class="container P-0" id="headder-container">
            <!--=============== START ================ -->
            <div class="mainHeadder">
                <div class="childHeadder">
                    <div class="wrapHeadder">
                        <div class="navItem">
                            <a href="index.php">
                                <h1>World<span>TP</span></h1>
                            </a>
                        </div>
                        <div class="navItem p-0" id="navitemaa">
                            <ul id="navlist p-0">
                                <li class="p-0"><a href="index.php">Home</a></li>
                                <li><a href="#about-container-fluid">About</a></li>
                                <li><a href="service.php">Service</a></li>
                                <li><a href="#container-fluid-tourPlace">TourPlan</a></li>
                                <li><a href="#footerFoom">Contact</a></li>
                                <li><a href="" data-target="#myModal" data-toggle="modal"><i class="fa-solid fa-user"></i></a></li>
                            </ul>
                        </div>
                        <div class="navResponsive" id="navResponsive">
                            <i class="fa-solid fa-xmark" id="Navclose" onclick="onClose()"></i>
                            <i class="fa-solid fa-bars" id="Navopen" onclick="onOpen()"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== SIGN IN PAGE ========================= -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
                <div class="modal-header">
                    <b>Login</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
        <!-- Modal body -->
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="modal-body">
                        <input type="username" placeholder="USERNAME" name="uname">
                        <input type="password" placeholder="PAASSWORD" name="password" >
                        <!-- <input type="password" placeholder="PASSWORD" name="password"> -->
                        <!-- <input type="text" placeholder="PASSWORD" name="password"> -->
                        <span>
                            <a href="#">Forget password</a>
                            &nbsp&nbsp
                            <a href="createAc.php">Create Account</a>
                        </span>
                        <div class="link">
                            <div class="a"><i class="fa-brands fa-google"></i></div>
                            <div class="a"><i class="fa-brands fa-facebook-f"></i></div>
                            <div class="a"><i class="fa-brands fa-linkedin-in"></i></div>
                        </div>
                    </div>
        
        <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--========================== JS FILE ========================-->
    <script src="JS/headdera.js"></script>
</body>
</html>