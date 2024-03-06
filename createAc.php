<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('asset/head.php');
       include('insertData.php');
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="container-fluid-CAC">
        <div class="container p-0" id="container-CAC">
            <div class="mainCAC">
                <div class="childCAC">
                    <div class="wrapCAC">
                        <h3>Create Account</h3>
                        <!-- form start -->
                        <div class="formCAC">
                            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="uname">Name:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="uname">Mobile:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="mobile" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="uname">Email:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="uname">Password:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="password" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Re-Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I Agree.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit"><a href="indext.php" style="text-decoration:none;color:white;">Submit</a></button>
                                <!-- <input type="submit" class="btn btn-primary"  name="submit" value="Submit"> -->
                            </form>
                        </div>
                    <!-- end form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
