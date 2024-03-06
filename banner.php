<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('asset/head.php');
    ?>
    
</head>
<body>
    <div class="container-fluid p-0" id="banner-container-fluid" style="background-image:url('IMG/banner/<?php echo $bimg; ?>');" >
        <div class="container p-0" id="banner-container">
            <div class="mainBanner">
                <div class="childBanner">
                    <div class="wrapBanner">
                        <div class="textBanner">
                            <h2>To Travel is to Live<br>is to Live<span>...!</span></h2>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur<br>adipisicing Lorem ipsum dolor sit amet. elit. Enim cum eius eligendi dolore <br>pariatur ex officia iste distinctio, sit similique.
                            </p>
                        </div>
                        <div class="buttonBanner">
                            <button data-target="#myModal" data-toggle="modal">Join us</button>
                            <button>Tour Plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== SIGN IN PAGE ========================= -->
    <!-- START SING IN PAGE -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <input type="text" placeholder="USERNAME" name="uname" class="d-block">
                    <input type="password" placeholder="PASSWORD" name="password" class="d-block">
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
    
            </div>
        </div>
    </div>
    <!-- END SING IN PAGE -->

</body>
</html>