<?php
    $mail = $_POST["email"];
    $cont = $_POST["content"];

    echo $mail."</br>";
    echo $cont."</br>";

    $adminMailChk = mail("hotelfypp@gmail.com", "User_Enquiry", $cont, "From: hotelfypp@gmail.com");
    $custMailChk = mail($mail, "Thank you for your enquiry", "Thank you for your enquiry.We will get back to you soon", "From: hotelfypp@gmail.com");

    if($adminMailChk && $custMailChk){
        echo "Thank you for your enquiry";
    }else{
        echo "Your enquiry did not reach us";
    }
?>