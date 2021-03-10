<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv = "refresh" content = "3; url = profilePage.php" />-->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <title>Add hotel</title>
    </head>
    <body>
        <main class="container">
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
                $hotel_detail = $_POST["detail"];
                $hotel_address = $_POST["address"];
                $hotel_contact = $_POST["contact"];
                $amenities = $_POST["amen"];
                $flag = FALSE;

                $main_image = $_FILES['main-img']['tmp_name'];
                $main_image = base64_encode(file_get_contents(addslashes($main_image)));

                $sub_image_1 = $_FILES['hotel-img-1']['tmp_name'];
                $sub_image_1 = base64_encode(file_get_contents(addslashes($sub_image_1)));

                $sub_image_2 = $_FILES['hotel-img-2']['tmp_name'];
                $sub_image_2 = base64_encode(file_get_contents(addslashes($sub_image_2)));

                $sub_image_3 = $_FILES['hotel-img-3']['tmp_name'];
                $sub_image_3 = base64_encode(file_get_contents(addslashes($sub_image_3)));

                $sub_image_4 = $_FILES['hotel-img-4']['tmp_name'];
                $sub_image_4 = base64_encode(file_get_contents(addslashes($sub_image_4)));

                $sub_image_5 = $_FILES['hotel-img-5']['tmp_name'];
                $sub_image_5 = base64_encode(file_get_contents(addslashes($sub_image_5)));    

                //echo $hotel_name."</br>";
                //echo $hotel_star."</br>";
                //echo $hotel_loc."</br>";
                //echo $hotel_des."</br>";
                //echo $hotel_info."</br>";
                //echo $check_in."</br>";
                //echo $check_out."</br>";
                //echo $hotel_price."</br>";
                //echo $hotel_detail."</br>";
                //echo $hotel_address."</br>";
                //echo $hotel_contact."</br>";      

                $conn = mysqli_connect("localhost", "root", "", "hotel");
                
                if($conn){             
                    $sql = "INSERT INTO HOTEL (HOTEL_ID, HOTEL_NAME, HOTEL_STAR, HOTEL_LOC, HOTEL_DES, HOTEL_INFO, CHECK_IN, 
                    CHECK_OUT, HOTEL_PRICE, HOTEL_IMG, HOTEL_DETAIL, ADDRESS, CONTACT, HOTELIER_ID) VALUES ('', '$hotel_name', '$hotel_star', 
                    '$hotel_loc', '$hotel_des', '$hotel_info', '$check_in', '$check_out', '$hotel_price', '$main_image', '$hotel_detail', 
                    '$hotel_address', '$hotel_contact', '$hotelier_id')";

                    $sql2 = "SELECT * FROM HOTEL WHERE HOTEL_NAME='$hotel_name' AND ADDRESS='$hotel_address'";        

                    if(mysqli_query($conn, $sql)){
                        //echo "insert_1 success";
                        $result = $conn->query($sql2);
                        while($row = $result->fetch_assoc()){
                            $hotel_id = $row["HOTEL_ID"];
                        }
                        $sql3 = "INSERT INTO HOTEL_IMG (IMG_ID, IMG_1, IMG_2, IMG_3, IMG_4, IMG_5, HOTEL_ID) VALUES 
                        ('', '$sub_image_1', '$sub_image_2', '$sub_image_3', '$sub_image_4', '$sub_image_5', '$hotel_id')";
                        if(mysqli_query($conn, $sql3)){
                            //echo "insert_2 success";
                            foreach($amenities as $amen){
                                $sql4 = "INSERT INTO HOTEL_AMENITIES (HOTEL_AMENITIES_ID, HOTEL_ID, AMENITIES_ID) VALUES
                                ('', '$hotel_id', '$amen')";
                                if(mysqli_query($conn, $sql4)){
                                    //echo "insert_3 success";
                                    $flag = TRUE;
                                }else{
                                    //echo "fail_3";
                                }                    
                            } 
                        }else{
                            //echo "fail_2";
                        }
                    }else{
                        //echo "fail_1";
                    }

                    if ($flag == TRUE){?>
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully added</h1>                            
                            <p class="lead">Thank you!</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php                             
                    }else{?>
                        <div class="jumbotron">
                            <h1 class="display-4">Fail to add</h1>                            
                            <p class="lead">Try again?</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php  
                    }
                }else{
                    die("FATAL ERROR");
                }
                $conn->close();
            ?>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>
