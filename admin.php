<!-- include files -->
<?php
   include("Admin/insert.php");
   include("Admin/select.php");
   include("Admin/update.php");
?>

<?php
    // session_start();
    // if(!isset($_SESSION['adminID'])){
    //     header("Location:adminlogin.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Only for Admin | AMARKANTAK DARSHAN</title>
    <link rel="stylesheet" href="Admin/css/adminaa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <div class="container-fluid bg-dark text-white">
           <div class="container text-center">
                <h1 class="py-1">WorldTP | Admin Pannel</h1>
                <button name="logout" class="btn btn-danger">Logout</button>
            </div>
            <?php
                // if(isset($_POST['logout'])){
                //     session_destroy();
                //     header("Location:adminlogin.php");
                // }
            ?>
            <br>
            <hr class="m-0">
        </div>
        <!-- banner Seaction -->
        <div class="container-fluid" id="bg-1">
            <!-- Banner Seaction -->
            <div class="container">
                <h3 class="py-4">Banner Seaction</h3>
                <h4>Main Banner</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                       <input type="file" class="form-control" name="img1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                       <img src="IMG/banner/<?php echo $bimg; ?>" alt="">
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">               
                        <input type="submit" id="btn" class="btn btn-primary" name="bbsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="bdelete" value="delete">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Seaction -->

        <!-- About Seaction -->
        <div class="container-fluid" id="bg-2">
            <div class="container">
                <h3 class="py-4">About Seaction</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                       <input type="file" class="form-control" name="aimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                       <img src="IMG/about/<?php echo $a1img; ?>" alt="">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="asubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="adelete" value="delete">
                    </div>
                </div>
            </div>
        </div>
        <!-- end About Seaction -->

        <!-- Service secation -->
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">Best Tour place</h3>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/tourplace/<?php echo $s1img; ?>" alt="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/tourplace/<?php echo $s2img; ?>" alt="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/tourplace/<?php echo $s3img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="ssubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="sdelete" value="delete">                      
                    </div>
                </div>
            </div>
        </div>
        <!-- end service secation -->
       
        <!-- Event Secation -->
        <div class="container-fluid" id="bg-2">
            <div class="container">
                <h3 class="py-4">New Event Offers</h3>
                <div class="col">
                    <h4>Event Name</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="eimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p><?php echo $e1img; ?></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Event Discription</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="eimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <p><?php echo $e2img; ?></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Event Image</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="eimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/event/<?php echo $e3img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="esubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="edelete" value="delete">
                    </div>
                </div>
            </div>
        </div>
        <!-- end event secation -->
       
        <!-- blog secation -->
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">Blog Secation</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="blimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/blog/<?php echo $blimg1; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="blimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/blog/<?php echo $blimg2; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="blimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/blog/<?php echo $blimg3; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="blimg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="IMG/blog/<?php echo $blimg4; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="blsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="bldelete" value="delete">
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog img -->

        <!-- Vehical secation -->
        <div class="container-fluid" id="bg-2">
            <div class="container">
                <h3 class="py-4">Vehicale Secation</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="vh1img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/service/<?php echo $vh1img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="vh2img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/service/<?php echo $vh2img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="vh3img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/service/<?php echo $vh3img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="vh4img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/service/<?php echo $vh4img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="vhsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="vhdelete" value="delete">
                    </div>
                </div>
            </div>
        </div>    
        <!-- end vehical secation -->

        <!-- Vehical secation -->
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">Hotel Service Secation</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h1img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/hservice/<?php echo $hs1img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h2img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/hservice/<?php echo $hs2img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h3img">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="IMG/hservice/<?php echo $hs3img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="hsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="hdelete" value="delete">
                    </div>
                </div>
            </div>
        </div>    
       <!-- end hotel service -->

    </form>
    <div class="container-fluid" id="copywrite">
        <p>&copy All Rigths Reserved Year-2023</p>
    </div>
    <!-- <div class="container-fluid bg-dark p-0 m-0">
        <p class="text-white text-center p-2">&copy All Right Reserved Year-2023</p>
    </div> -->
            <!-- JavaScript -->
        <script src="Admin/js/script.js"></script>
</body>
</html>