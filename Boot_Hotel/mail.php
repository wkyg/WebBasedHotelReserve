<?php
    $mail = $_POST["email"];
    $cont = $_POST["content"];

    echo $mail."</br>";
    echo $cont."</br>";

    $result = mail($mail, "User_Enquiry", $cont, "From: hotelfypp@gmail.com");

    if($result){
        echo "Thank you for your enquiry";
    }else{
        echo "Your enquiry did not reach us";
    }
?>