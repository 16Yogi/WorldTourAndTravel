<?php
   include('connectiondb.php');

   $sql="CREATE TABLE createaccount(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            uname VARCHAR(255) NOT NULL,
            mobile VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            passwordur VARCHAR(255) NOT NULL,
            passwordura VARCHAR(255) NOT NULL
        )";
    if($sql){
        // echo "Table created...!";
    }else{
        // echo "Table not created...!";
    }
?>