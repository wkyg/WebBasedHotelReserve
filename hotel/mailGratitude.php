<?php
    $book_id = $_GET["book_id"];

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT USER_ID FROM BOOKING WHERE BOOK_ID = '$book_id'";
        $result = $conn->query($sql);

        while($row=$result->fetch_assoc()){
            $user_id = $row["USER_ID"];

            echo $user_id;
        }

        $sql2 = "SELECT USER_EMAIL FROM USER WHERE USER_ID = '$user_id'";
        $result2 = $conn->query($sql2);

        while($row_2=$result2->fetch_assoc()){
            $user_email = $row_2["USER_EMAIL"];

            echo $user_email;
        }

    }else{
        die("FATAL ERROR");
    }
    $conn->close();

    $custMailChk = mail($user_email, "Thank you for your booking!", "Thank you for choosing Hotelah hotel reservation, we hope to serve you again!", "From: hotelfypp@gmail.com");

    if($custMailChk){        
        echo "<script> alert('MAIL SEND')</script>";
        header("Location: profilePageHotelier.php");
        exit();
    }else{
        echo "<script> alert('MAIL NOT SEND')</script>";
    }

?>