<?php
    $hotelier_id = $_GET["hotelier_id"];

    $hotel_name = $_POST["name"];
    $hotel_star = $_POST["hotel-star"];
    $hotel_loc = $_POST["location"];
    $hotel_des = $_POST["des"];
    $hotel_info = $_POST["info"];
    $check_in = $_POST["check-in"];
    $check_out = $_POST["check-out"];
    $hotel_price = $_POST["price"];
    //$hotel_main_img = $_POST["main-img"];
    //$hotel_sub_img_1 = $_POST["hotel-img-1"];
    //$hotel_sub_img_2 = $_POST["hotel-img-2"];
    //$hotel_sub_img_3 = $_POST["hotel-img-3"];
    //$hotel_sub_img_4 = $_POST["hotel-img-4"];
    //$hotel_sub_img_5 = $_POST["hotel-img-5"];
    $hotel_detail = $_POST["detail"];
    $hotel_address = $_POST["address"];
    $hotel_contact = $_POST["contact"];

    $image = $_FILES['main-img']['tmp_name'];
    $image = base64_encode(file_get_contents(addslashes($image)));

    echo $hotel_name."</br>";
    echo $hotel_star."</br>";
    echo $hotel_loc."</br>";
    echo $hotel_des."</br>";
    echo $hotel_info."</br>";
    echo $check_in."</br>";
    echo $check_out."</br>";
    echo $hotel_price."</br>";
    echo $hotel_detail."</br>";
    echo $hotel_address."</br>";
    echo $hotel_contact."</br>";

    $conn = mysqli_connect("localhost", "root", "", "hotel");
    
    if($conn){        
        $sql = "INSERT INTO HOTEL (HOTEL_ID, HOTEL_NAME, HOTEL_STAR, HOTEL_LOC, HOTEL_DES, HOTEL_INFO, CHECK_IN, 
        CHECK_OUT, HOTEL_PRICE, HOTEL_IMG, HOTEL_DETAIL, ADDRESS, CONTACT, HOTELIER_ID) VALUES ('', '$hotel_name', '$hotel_star', 
        '$hotel_loc', '$hotel_des', '$hotel_info', '$check_in', '$check_out', '$hotel_price', '$image', '$hotel_detail', 
        '$hotel_address', '$hotel_contact', '$hotelier_id')";

        if(mysqli_query($conn, $sql)){
            echo "insert success";
        }else{
            echo "fail";
        }
    }else{
        die("FATAL ERROR");
    }
    $conn->close();
?>