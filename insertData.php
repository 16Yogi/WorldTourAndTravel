<?php 
  include('connectiondb.php');
  // include('createTable.php'); 

  if (isset($_POST['submit'])) {
    $first_name = $_POST['uname'];
    $mobile_no = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['pswd']; 
    $sql = "INSERT INTO `createac`(`uname`, `mobile`,`email`,`password`,`pswd`) VALUES 
    ('$first_name','$mobile_no','$email','$password','$gender')";
    $result = $con->query($sql);
    if ($result == TRUE) {
      // echo "New record created successfully.";
    }
    else{
      // echo "Error";
      $con->close(); 
    }
  }
?>
