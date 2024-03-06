<?php


  include("connection.php");
    
    

  if(isset($_POST['bbsubmit'])){
    $bimg = $_FILES['img1']['name'];
    $bimgTMP = $_FILES['img1']['tmp_name'];
    $bfolder = "IMG/banner/";
    move_uploaded_file($bimgTMP,$bfolder.$bimg);
    
    $sql = "INSERT INTO `banner`(`bn1`) VALUES ('$bimg')";
    $result = mysqli_query($con,$sql);
    if($result){
      echo "<script>alert('image successfully inserted..!');</script>";
    }else{
      echo "<script>alert('image not inserted..!');</script>";
    }
  }
   
//    About secation
    
    if(isset($_POST['asubmit'])){
        $a1img = $_FILES['aimg1']['name'];
        $a1imgTMP = $_FILES['aimg1']['tmp_name'];
        $a1folder = "IMG/about/";
        move_uploaded_file($a1imgTMP,$a1folder.$a1img);
       
     
        $aqry = "INSERT INTO `about`(`a1`) VALUES ('$a1img')";
        $aresult = mysqli_query($con,$aqry);

      if($aresult){
        echo "<script>alert('image successfully inserted..!');</script>";
      }else{
        echo "<script>alert('image not inserted..!');</script>";
      }
    }

// best tour place
    
if(isset($_POST['ssubmit'])){
    $tp1img = $_FILES['simg1']['name'];
    $tp1imgTMP = $_FILES['simg1']['tmp_name'];
    $tp1folder = "IMG/tourplace/";
    move_uploaded_file($tp1imgTMP,$tp1folder.$tp1img);
    
    $tp2img = $_FILES['simg2']['name'];
    $tp2imgTMP = $_FILES['simg2']['tmp_name'];
    $tp2folder = "IMG/tourplace/";
    move_uploaded_file($tp2imgTMP,$tp2folder.$tp2img);

    $tp3img = $_FILES['simg3']['name'];
    $tp3imgTMP = $_FILES['simg3']['tmp_name'];
    $tp3folder = "IMG/tourplace/";
    move_uploaded_file($tp3imgTMP,$tp3folder.$tp3img);

    $aqry = "INSERT INTO `tourplace`(`tp1`, `tp2`, `tp3`) VALUES ('$tp1img','$tp2img','$tp3img')";
    $aresult = mysqli_query($con,$aqry);

  if($aresult){
    echo "<script>alert('image successfully inserted..!');</script>";
  }else{
    echo "<script>alert('image not inserted..!');</script>";
  }
}


// event description

if(isset($_POST['esubmit'])){
    $eimg1 = $_POST['eimg1'];
    
    $eimg2 = $_POST['eimg2'];
    
    $eimg3 = $_FILES['eimg3']['name'];
    $eimg3TMP = $_FILES['eimg3']['tmp_name'];
    $eimg3folder = "IMG/event/";
    move_uploaded_file($eimg3TMP,$eimg3folder.$eimg3);
    
    $eventqry = "INSERT INTO `event`(`eimg1`, `eimg2`, `eimg3`) VALUES ('$eimg1','$eimg2','$eimg3')";
    $eventresult = mysqli_query($con,$eventqry);
    if($eventresult){
      echo "<script>alert('image successfully inserted');</script>";
    }else{
      echo "<script>alert('image not inserted');</script>";
    }
}


// blog
if(isset($_POST['blsubmit'])){
  
  $blimg1 = $_FILES['blimg1']['name'];
  $blimg1TMP = $_FILES['blimg1']['tmp_name'];
  $blimg1folder = "IMG/blog";
  move_uploaded_file($blimg1TMP,$blimg1folder.$blimg1);

  $blimg2 = $_FILES['blimg2']['name'];
  $blimg2TMP = $_FILES['blimg2']['tmp_name'];
  $blimg2folder = "IMG/blog/";
  move_uploaded_file($blimg2TMP,$blimg2folder.$blimg2);

  $blimg3 = $_FILES['blimg3']['name'];
  $blimg3TMP = $_FILES['blimg3']['tmp_name'];
  $blimg3folder = "IMG/blog/";
  move_uploaded_file($blimg3TMP,$blimg3folder.$blimg3);

  $blimg4 = $_FILES['blimg4']['name'];
  $blimg4TMP = $_FILES['blimg4']['tmp_name'];
  $blimg4folder = "IMG/blog/";
  move_uploaded_file($blimg4TMP,$blimg4folder.$blimg4);
  
  $blinsert = "INSERT INTO `blog`(`blimg1`, `blimg2`, `blimg3`, `blimg4`) VALUES ('$blimg1','$blimg2','$blimg3','$blimg4')";
  $blsql = mysqli_query($con,$blinsert);

  if($blsql){
    echo "<script>alert('image inserted');</script>";
  }else{
    echo "<script>alert('image not inserted');</script>";
  }

}


// vehical secation

if(isset($_POST['vhsubmit'])){
  
  $vh1img = $_FILES['vh1img']['name'];
  $vh1imgTMP = $_FILES['vh1img']['tmp_name'];
  $vh1folder = "IMG/service/";
  move_uploaded_file($vh1imgTMP,$vh1folder.$vh1img);

  $vh2img = $_FILES['vh2img']['name'];
  $vh2imgTMP = $_FILES['vh2img']['tmp_name'];
  $vh2imgfolder = "IMG/service/";
  move_uploaded_file($vh2imgTMP,$vh2imgfolder.$vh2img); 

  $vh3img = $_FILES['vh3img']['name'];
  $vh3imgTMP = $_FILES['vh3img']['tmp_name'];
  $vh3imgfolder = "IMG/service/";
  move_uploaded_file($vh3imgTMP,$vh3imgfolder.$vh3img);

  $vh4img = $_FILES['vh4img']['name'];
  $vh4imgTMP = $_FILES['vh4img']['tmp_name'];
  $vh4imgfolder = "IMG/service/";
  move_uploaded_file($vh4imgTMP,$vh4imgfolder.$vh4img);

  $vhinsert = "INSERT INTO `service`(`vh1`, `vh2`, `vh3`, `vh4`) VALUES ('$vh1img','$vh2img','$vh3img','$vh4img')";
  $vhsql = mysqli_query($con,$vhinsert);

  if($vhsql){
    echo "<script>alert('Data inserted');</script>";
  }else{
    echo "<script>alert('Data not inserted');</script>";
  }


}


// hotel service
if(isset($_POST['hsubmit'])){
  $h1img = $_FILES['h1img']['name'];
  $h1imgTMP = $_FILES['h1img']['tmp_name'];
  $h1folder = "IMG/hservice/";
  move_uploaded_file($h1imgTMP,$h1folder.$h1img);

  $h2img = $_FILES['h2img']['name'];
  $h2imgTMP = $_FILES['h2img']['tmp_name'];
  $h2folder = "IMG/hservice/";
  move_uploaded_file($h2imgTMP,$h2folder .$h2img);

  $h3img = $_FILES['h3img']['name'];
  $h3imgTMP = $_FILES['h3img']['tmp_name'];
  $h3imgfolder = "IMG/hservice/";
  move_uploaded_file($h3imgTMP,$h3imgfolder.$h3img);

  $hsql = "INSERT INTO `hservice`(`hs1`, `hs2`, `hs3`) VALUES ('$h1img','$h2img','$h3img')";
  $hresult = mysqli_query($con,$hsql);

  if($hresult){
    echo "<script>alert('data inserted..!');</script>";
  }else{
    echo "<script>alert('data not inserted');</script>";
  }



}
?>