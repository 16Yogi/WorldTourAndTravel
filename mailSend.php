<?php
   if(isset($_POST['send']))
   {
    $to = "singhnaru68@gmail.com";
    $subject =  $_POST['clientName'];
    $message =  $_POST['message'];
    $from = $_POST['clientEmail'];

    // echo $to;
    // echo $subject;
    // echo $message;
    // echo $from;

    // $Send = mail($to,$subject,$message);
    // if($Send){
    //     echo "Mail sended...!";
    // }else{
    //     echo "Not sended..>!";
    // }
    $headers = "From: $from";

    $mail = mail($to,$subject,$message,$headers);
    if($mail){
        echo "Message sended...!";
    }else{
        echo "message not sended...!";
    }
   }else{
     echo "Something want to wrong...!";
   }

?>