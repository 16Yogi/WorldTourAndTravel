<!-- include files -->
<?php
   include("insert.php");
   include("select.php");

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
    <!-- <link rel="stylesheet" href="css/admin.css"> -->
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
        <div class="container-fluid">
            <!-- Banner Seaction -->
            <div class="container">
                <h3 class="py-4">Banner Seaction</h3>
                <h4>Main Banner</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                       <input type="file" class="form-control" name="img1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                       <img src="../IMG/banner/<?php echo $bimg; ?>" alt="">
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
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">About Seaction</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                       <input type="file" class="form-control" name="aimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                       <img src="../IMG/about/<?php echo $a1img; ?>" alt="">
                       
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
        <div class="container-fluid">
            <div class="container">
                <h3 class="py-4">Services</h3>
                <div class="col">
                    <h4>Food Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/service/<?php echo $s1img; ?>" alt="">
                    </div>
                </div>
                <div class="col">
                    <h4>Hotel Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/service/<?php echo $s2img; ?>" alt="">
                    </div>
                </div>
                <div class="col">
                    <h4>Vehical Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/service/<?php echo $s3img; ?>" alt="">
                    </div>
                </div>
                <div class="col">
                    <h4>Tour Guide Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/service/<?php echo $s4img; ?>" alt="">
                    </div>
                </div>
                <div class="col">
                    <h4>Bus Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/service/<?php echo $s5img; ?>" alt="">
                    </div>
                </div>
                <div class="col">
                    <h4>Train Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="simg6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/service/<?php echo $s6img; ?>" alt="">
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
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">Amarkantak Event</h3>
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
                        <img src="img/event/<?php echo $e3img; ?>" alt="">
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
       
        <!-- Hotel Profile Book -->
        <div class="container-fluid" id="bg-1">
            <div class="container">
                <h3 class="py-4">Hotel Information</h3>
                <div class="col">
                    <h4>Hotel Name</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Owner Name</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Contact Number</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Email</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h4>Address</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h4>About hotel</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="text" class="form-control" name="h6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/hotel/<?php echo $hteimg1; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/hotel/<?php echo $hteimg2; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h9">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/hotel/<?php echo $hteimg3; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="h10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <img src="img/hotel/<?php echo $hteimg4; ?>" alt="">
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="hpsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="hpdelete" value="delete">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hotel book -->

        <!-- Gallery -->
        <div class="container-fluid" id="bg-2">
            <div class="container">
                <h3 class="py-4">Gallery Images</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g1img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g2img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g3img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g4img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g5img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g6img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g7img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g8img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g9">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g9img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g10img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g11img; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="file" class="form-control" name="g12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 " id="content">
                        <img src="img/gallery/<?php echo $g12img; ?>" alt="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4 text-center" id="content">
                        <input type="submit" id="btn" class="btn btn-primary" name="gsubmit" value="upload">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-4" id="content">
                        <input type="submit" id="btn" class="btn btn-danger" name="gpdelete" value="delete">
                    </div>
                </div>
            </div>
        </div>    

    </form>
    <div class="container-fluid p-0" id="copywrite">
        <p>&copy All Rigths Reserved Year-2023</p>
    </div>
            <!-- JavaScript -->
        <script src="Admin/js/script.js"></script>
</body>
</html>