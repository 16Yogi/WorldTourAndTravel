<?php
// banner
    if(isset($_POST['bdelete'])){
        $delete = "DELETE FROM `banner`";
        $sql = mysqli_query($con,$delete);
        if($sql){
            echo "<script>alert('Delete.....!');</script>";
        }else{
            echo "<script>alert('delete failed');</script>";
        }
    }


// about

if(isset($_POST['adelete'])){
    $delete = "DELETE FROM `about`";
    $sql = mysqli_query($con,$delete);
    if($sql){
        echo "<script>alert('delete...!');</script>";
    }else{
        echo "<script>alert('delete failed');</script>";
    }
}

// best tour place
if(isset($_POST['edelete'])){
    $delete = "DELETE FROM `event`";
    $sql = mysqli_query($con,$delete);
    if($sql){
        echo "<script>alert('delete...!');</script>";
    }else{
        echo "<script>alert('delete failed...!);<script>";
    }
}


//blog secation
if(isset($_POST['bldelete'])){
    $delete = "DELETE FROM `blog`";
    $sql = mysqli_query($con,$delete);
    if($sql){
        echo "<script>alert('delete....!');</script>";
    }else{
        echo "<script>alert('delete failed');</script>";
    }
}


//vehical secation
if(isset($_POST['vhdelete'])){
    $delete = "DELETE FROM `service`";
    $sql = mysqli_query($con,$delete);
    if($sql){
        echo "<script>alert('delete');</script>";
    }else{
        echo "<script>alert('delete failed');</script>";
    }
}

//hotel secation
if(isset($_POST['hdelete'])){
    $delete = "DELETE FROM `hservice`";
    $sql = mysqli_query($con,$delete);

    if($sql){
        echo "<script>alert('delete...');</script>";
    }else{
        echo "<script>alert('delete failed')</script>";
    }
}

?>