<?php
   include("connection.php");

   $sql = "SELECT * FROM `banner`";
   $result = mysqli_query($con,$sql);

   while($row = mysqli_fetch_array($result)){
        $bimg = $row['bn1'];
   }

//    -----------------------

   $sql = "SELECT * FROM `about`";
   $result = mysqli_query($con,$sql);

   while($row = mysqli_fetch_array($result)){
        $a1img = $row['a1'];
   }
   
// -----------------------------
    
    $sql = "SELECT * FROM `tourplace`";
    $result = mysqli_query($con,$sql);
    
    while($row = mysqli_fetch_array($result)){
         $s1img = $row['tp1'];
         $s2img = $row['tp2'];
         $s3img = $row['tp3'];

    }


//     event secation

$esql = "SELECT * FROM `event`";
$eresult = mysqli_query($con,$esql);

while($row = mysqli_fetch_array($eresult)){
     $e1img = $row['eimg1'];
     $e2img = $row['eimg2'];
     $e3img = $row['eimg3'];
}
    

// blog 

$blsql = "SELECT * FROM `blog`";
$blresult = mysqli_query($con,$blsql);

while($row = mysqli_fetch_array($blresult)){
     $blimg1 = $row['blimg1'];
     $blimg2 = $row['blimg2'];
     $blimg3 = $row['blimg3'];
     $blimg4 = $row['blimg4'];
}

// vehicale service

$vhsql = "SELECT * FROM `service`";
$vhselect = mysqli_query($con,$vhsql);

while($row = mysqli_fetch_array($vhselect)){
     $vh1img = $row['vh1'];
     $vh2img = $row['vh2'];
     $vh3img = $row['vh3'];
     $vh4img = $row['vh4'];
}

// hotel service

$shsql = "SELECT * FROM `hservice`";
$shresult = mysqli_query($con,$shsql);

while($row = mysqli_fetch_array($shresult)){
     $hs1img = $row['hs1'];
     $hs2img = $row['hs2'];
     $hs3img = $row['hs3'];
}
?>