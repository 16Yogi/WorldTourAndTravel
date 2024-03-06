<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('Asset/head.php');
    //    include('mailSend.php');
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="container-fluid-footer">
        <div class="container p-0" id="container-footer">
            <div class="mainFooter">
                <div class="childFooter">
                    <div class="wrapFooter">
                        <div class="secFooter" id="top">
                            <div class="wrapperFooter">
                                <div class="iconFooter"><a href="https://www.facebook.com/yogendra.meravi.79"><i class="fa-brands fa-facebook-f"></i></a></div>
                                <div class="iconFooter"><a href=" https://www.instagram.com/invites/contact/?i=16drd8wc9l5jv&utm_content=3h4zg2n"><i class="fa-brands fa-instagram"></i></a></div>
                                <div class="iconFooter"><a href="https://wa.me/qr/VS5IEQS6QC2HO1"><i class="fa-brands fa-whatsapp"></i></a></div>
                                <div class="iconFooter"><a href="https://twitter.com/A_YogiYogendra?t=SRO9lHDGvX99A3dGtm1CGQ&s=09"><i class="fa-brands fa-twitter"></i></a></div>
                                <div class="iconFooter"><a href="https://youtube.com/@yogigaming4404"><i class="fa-brands fa-youtube"></i></a></div>
                            </div>
                        </div>
                        <div class="secFooter" id="center">
                            <div class="wrapperFooter">
                                <div class="itemWrapper">
                                    <h4>Contact us</h4>
                                    <p>123 Second Street Fifth</p>
                                    <p>Avenue,</p>
                                    <p>Manhattan, New York</p>
                                    <p>+987 654 3210</p>
                                </div>
                                <div class="itemWrapper">
                                    <h4>Additional Link</h4>
                                    <p><a href="">About us</a></p>
                                    <p><a href="">Terms and Conditions</a></p>
                                    <p><a href="">Privacy Policy</a></p>
                                    <p><a href="">News</a></p>
                                    <p><a href="">Contact us</a></p>
                                </div>
                                <div class="itemWrapper" id="footerFoom">
                                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                        <h4>Contact</h4>
                                        <input type="text" name="clientName" placeholder="Name">
                                        <input type="text"name="clientEmail" placeholder="Email">
                                        <textarea name="message" id="" placeholder="Message..."></textarea>
                                        <button name="send">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="secFooter" id="bottom">
                            <div class="wrapperFooter">
                                <hr>
                                <span>Copyright &copy2019 All Right Reserved By WorldTP(AY)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
