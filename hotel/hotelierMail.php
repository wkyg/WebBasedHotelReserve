<?php
    $cont = $_POST["content"];
    $hotel_detail_id = $_GET["hotel_id"];

    echo $cont."</br>";
    echo $hotel_detail_id."</br>";

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT HOTELIER_EMAIL FROM HOTELIER_HOTEL_EMAIL_VIEW WHERE HOTEL_ID = '$hotel_detail_id'";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            $mail = $row["HOTELIER_EMAIL"];   
        }
    }else{
        die("FATAL ERROR");
    }
    $conn->close();

    echo $mail;
                                                
    $hotelierMailChk = mail("$mail", "Boop! heads up", $cont, "From: hotelfypp@gmail.com"); //From: to be changed to user email
    //$userMailChk = mail("hotelfypp@gmail.com", "Thank you for your enquiry", "Thank you for your enquiry.We will get back to you soon", "From: $mail");

    if($hotelierMailChk){
        echo "Thank you for your enquiry";
        header("Location: hotelierMailSuccess.php?hotel_id=$hotel_detail_id");
        exit();
    }else{
        echo "Your enquiry did not reach us";
    }
    
?>