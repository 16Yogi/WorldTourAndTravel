<?php 
  include('connectiondb.php');

  $first_name = $_POST['uname'];
  $password = $_POST['password'];
  // include('createTable.php'); 
  $check=mysqli_query($connect,"select * from createac where uname=' $first_name' and password=' $password'");
  // $checkEmail=mysqli_query($connect,"select * from students where Email='$Email'");
  if (mysqli_num_rows($check)>0)
  {   
    echo "Login successfully...!";
    //   $msg="<h5>"."mobile"."</h5>"." no or"."<h5>"."email"."</h5>"." already exists!.";
    //   header("Location: RegistrationForm.php?msg=$msg & name=$name & mobile=$mobile & email=$email & college=$college & address=$address");
  }
  else{
    echo "Password not match";
  }

?>
