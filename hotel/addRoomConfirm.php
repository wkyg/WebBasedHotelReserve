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
        <title>Add room</title>
    </head>
    <body>
        <main class="container">
            <?php
                $tmp_hot_id = $_GET["hotel_id"];

                $room_type = $_POST["room-type"];
                $room_number = $_POST["room-num"];
                $room_avai = $_POST["room-avai"];
                $room_price = $_POST["room-price"];
         
                if($room_avai == "Available"){
                    $room_avai = "yes";
                }else{
                    $room_avai = "no";
                }
                $flag = FALSE;

                $room_img = $_FILES['room-img']['tmp_name'];
                $room_img = base64_encode(file_get_contents(addslashes($room_img)));         
                
                //echo $room_type.$room_number.$room_avai.$room_price;

                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){                    
                    $sql = "INSERT INTO ROOM (ROOM_ID, ROOM_TYPE, ROOM_NUMBER, ROOM_AVAI, ROOM_PRICE, ROOM_IMG, HOTEL_ID) VALUES 
                    ('', '$room_type', '$room_number', '$room_avai', '$room_price', '$room_img', '$tmp_hot_id')";

                    if(mysqli_query($conn, $sql)){
                        //echo "inserted";
                        $flag = TRUE;
                    }else{
                        echo "failed";
                    }

                    if($flag == TRUE){?>
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
