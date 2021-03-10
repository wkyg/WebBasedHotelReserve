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
        <title>Update hotel</title>
    </head>
    <body>
        <main class="container">
            <?php
                $hotel_id = $_GET["hotel_id"];

                //echo $hotel_id;

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

                /*
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
                */

                $conn = mysqli_connect("localhost", "root", "", "hotel");
                
                if($conn){
                    $sql = "UPDATE HOTEL SET HOTEL_NAME='$hotel_name', HOTEL_STAR='$hotel_star', HOTEL_LOC='$hotel_loc', HOTEL_DES='$hotel_des', HOTEL_INFO='$hotel_info', 
                    CHECK_IN='$check_in', CHECK_OUT='$check_out', HOTEL_PRICE='$hotel_price', HOTEL_DETAIL='$hotel_detail', ADDRESS='$hotel_address', CONTACT='$hotel_contact' 
                    WHERE HOTEL_ID = '$hotel_id'";

                    $sql2 = "DELETE FROM HOTEL_AMENITIES WHERE HOTEL_ID = '$hotel_id'";

                    

                    if(mysqli_query($conn, $sql)){
                        //echo "updated";
                        if(mysqli_query($conn, $sql2)){
                            //echo "deleted";
                            foreach($amenities as $amen){
                                $sql3 = "INSERT INTO HOTEL_AMENITIES (HOTEL_AMENITIES_ID, HOTEL_ID, AMENITIES_ID) VALUES ('', '$hotel_id', '$amen')";
                                if(mysqli_query($conn, $sql3)){
                                    //echo "inserted";
                                    $flag = TRUE;
                                }else{
                                    echo "fail";
                                }
                                
                            }
                        }else{
                            echo "fail to delete";
                        }
                    }else{
                        echo "failed";
                    }

                    if ($flag == TRUE){?>
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully updated</h1>                            
                            <p class="lead">Thank you!</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php                             
                    }else{?>
                        <div class="jumbotron">
                            <h1 class="display-4">Fail to update</h1>                            
                            <p class="lead">Try again?</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php  
                    }
                }else{
                    die("FATAL ERROR");
                }                
            ?>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>
